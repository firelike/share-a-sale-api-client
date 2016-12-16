<?php
namespace ShareASale\Validator;


use Zend\Validator\AbstractValidator;
use Zend\Validator\InArray;

class XmlFormatParameterValidator extends AbstractValidator
{

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value)
    {
        $inArrayValidator = new InArray();
        $inArrayValidator->setHaystack([
            '0',
            '1'
        ]);

        foreach ($value as $key => $option) {
            if ($key == 'XMLFormat') {
                if (!$inArrayValidator->isValid($option)) {
                    $this->setMessage(sprintf('invalid xml format parameter provided: %s. expecting 0 or 1', $option));
                    return false;
                }
            }
            return true;
        }
    }

}