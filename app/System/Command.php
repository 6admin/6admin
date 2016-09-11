<?php
namespace App\System;

class Command
{
    public $path;
    public $arguments;
    public $options;
    public $return;

    public static function run($path, $arguments = [], $options = [], $return = false)
    {
        $command = new Command($path, $arguments, $options, $return);
        return $command->execute();
    }

    public function __construct($path, $arguments = [], $options = [], $return = false)
    {
        $this->path = $path;
        $this->arguments = is_array($arguments) ? $arguments : [$arguments];
        $this->options = is_array($options) ? $options : [$options];
        $this->return = $return;
    }

    public function execute()
    {
        if(!file_exists($this->path)) {
            throw new Exception\FileNotFoundException("The file " . $this->path . " could not be found.");
        }

        if($this->return) {
            return $this->getShellCommand();
        }
        else {
            exec($this->getShellCommand(), $output);
        }

        return $output;
    }

    protected function getShellCommand()
    {
        $args = [];

        foreach($this->arguments as $argument) {
            $args[] = escapeshellarg($argument);
        }

        foreach($this->options as $name => $value) {
            if(!starts_with($name, '-')) {
                $name = '--' . $name;
            }

            if(!is_bool($value) AND !is_null($value)) {
                $args[] = $name . " " . escapeshellarg($value);
            }
            else {
                $args[] = $name;
            }
        }

        return $this->path . " " . implode(' ', $args);
    }
}