<?php

namespace ShareASale\Validator\Factory;


use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class BasicServiceMethodParametersValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new \ShareASale\Validator\BasicServiceMethodParametersValidator();
        $validator->setProperServiceMethodParametersValidator($sm->get('ShareASale\Validator\ProperServiceMethodParametersValidator'));
        $validator->setDefaultParametersNotEmptyValidator($sm->get('ShareASale\Validator\DefaultParametersNotEmptyValidator'));
        $validator->setSortDirectionValidator($sm->get('ShareASale\Validator\SortDirectionParameterValidator'));
        $validator->setFormatParameterValidator($sm->get('ShareASale\Validator\FormatParameterValidator'));
        $validator->setXmlFormatParameterValidator($sm->get('ShareASale\Validator\XmlFormatParameterValidator'));
        return $validator;
    }

}