<?php
namespace App\Repository;

use Validator;

trait HasDefaultValues
{
    protected function getValues()
    {
        // TODO : Do something here for allowing user to make their own default json

        // Try to get values from repository attribute
        if(property_exists($this, 'default')) {
            return $this->default;
        }

        // Try to get values from repository method
        elseif(method_exists($this, 'detDefault')) {
            return $this->getValidator();
        }
    }
}