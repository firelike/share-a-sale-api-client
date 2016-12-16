<?php

namespace ShareASale\Validator\Factory;


use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class ProperServiceMethodParametersValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new \ShareASale\Validator\ProperServiceMethodParametersValidator();
        return $validator;
    }

}