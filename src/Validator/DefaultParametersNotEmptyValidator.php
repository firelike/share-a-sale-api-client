<?php
namespace Firelike\ShareASale\Validator;


use Laminas\Validator\AbstractValidator;
use Laminas\Validator\NotEmpty;

class DefaultParametersNotEmptyValidator extends AbstractValidator
{

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value)
    {
        $notEmptyValidator = new NotEmpty();

        foreach ([
                     'version',
                     'action',
                     'affiliateId',
                     'token',
                     'XMLFormat',
                     'format'
                 ] as $parameter) {

            if (!$notEmptyValidator->isValid($value[$parameter])) {
                $this->setMessage(sprintf('empty required parameter found: %s', $parameter));
                return false;
            }
        }
        return true;
    }


}