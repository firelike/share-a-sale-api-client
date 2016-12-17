<?php

namespace Firelike\ShareASale\Validator\Factory;


use Firelike\ShareASale\Validator\SortDirectionParameterValidator;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class SortDirectionParameterValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new SortDirectionParameterValidator();
        return $validator;
    }

}