<?php

namespace Firelike\ShareASale\Validator\Factory;


use Firelike\ShareASale\Validator\FormatParameterValidator;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class FormatParameterValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new FormatParameterValidator();
        return $validator;
    }

}