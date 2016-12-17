<?php

namespace Firelike\ShareASale\Validator\Factory;


use Firelike\ShareASale\Validator\XmlFormatParameterValidator;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class XmlFormatParameterValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new XmlFormatParameterValidator();
        return $validator;
    }

}