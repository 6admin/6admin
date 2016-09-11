<?php
namespace App\Repository;

use Validator;

trait HasInputValidation
{
    public function validate(array $datas)
    {
        $validator = $this->buildValidator($datas);

        if ($validator->fails()) {
            throw new Exceptions\ValidationException(implode('. ', $validator->errors()->all()));
        }

        return true;
    }

    protected function buildValidator(array $datas)
    {
        // Try to load the validation from repository attribute
        if(property_exists($this, 'validation') AND !empty($this->validation)) {
            $validator = Validator::make($datas, $this->validation); 
        }
        // Try to get the validator from method
        elseif(method_exists($this, 'getValidator')) { // TODO : Can we do more checks here ?
            $validator = $this->getValidator($datas);
        }

        if(!isset($validator)) {
            throw new Exceptions\NoValidatorException("No validation attribute or getValidator method found for the repository : " . get_class($this));
        }

        return $validator;
    }
}