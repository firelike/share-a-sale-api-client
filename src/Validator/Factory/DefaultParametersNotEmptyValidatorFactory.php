<?php

namespace Firelike\ShareASale\Validator\Factory;


use Firelike\ShareASale\Validator\DefaultParametersNotEmptyValidator;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class DefaultParametersNotEmptyValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new DefaultParametersNotEmptyValidator();
        return $validator;
    }

}