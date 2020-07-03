<?php
namespace Firelike\ShareASale\Validator;


use Laminas\Validator\AbstractValidator;
use Laminas\Validator\InArray;

class SortDirectionParameterValidator extends AbstractValidator
{

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value)
    {
        $inArrayValidator = new InArray();
        $inArrayValidator->setHaystack([
            'asc',
            'desc'
        ]);

        foreach ($value as $key => $option) {
            if ($key == 'sortDir') {
                if (!$inArrayValidator->isValid($option)) {
                    $this->setMessage(sprintf('invalid sort direction parameter provided: %s. expecting asc or desc', $option));
                    return false;
                }
            }
        }
        return true;
    }

}