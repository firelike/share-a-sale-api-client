<?php

namespace Firelike\ShareASale\Validator\Factory;


use Firelike\ShareASale\Validator\ProperServiceMethodParametersValidator;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class ProperServiceMethodParametersValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new ProperServiceMethodParametersValidator();
        return $validator;
    }

}