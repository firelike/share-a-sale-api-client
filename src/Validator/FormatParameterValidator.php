<?php
namespace Firelike\ShareASale\Validator;


use Laminas\Validator\AbstractValidator;
use Laminas\Validator\InArray;

class FormatParameterValidator extends AbstractValidator
{

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value)
    {
        $inArrayValidator = new InArray();
        $inArrayValidator->setHaystack([
            'pipe',
            'xml',
            'csv'
        ]);

        foreach ($value as $key => $option) {
            if ($key == 'format') {
                if (!$inArrayValidator->isValid($option)) {
                    $this->setMessage(sprintf('Invalid format parameter provided: %s . expecting pipe, xml or csv', $option));
                    return false;
                }
            }
        }
        return true;
    }

}