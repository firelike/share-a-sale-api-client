<?php
namespace Firelike\ShareASale\Validator\Factory;


use Firelike\ShareASale\Validator\BasicServiceMethodParametersValidator;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class BasicServiceMethodParametersValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new BasicServiceMethodParametersValidator();
        $validator->setProperServiceMethodParametersValidator($sm->get('Firelike\ShareASale\Validator\ProperServiceMethodParametersValidator'));
        $validator->setDefaultParametersNotEmptyValidator($sm->get('Firelike\ShareASale\Validator\DefaultParametersNotEmptyValidator'));
        $validator->setSortDirectionValidator($sm->get('Firelike\ShareASale\Validator\SortDirectionParameterValidator'));
        $validator->setFormatParameterValidator($sm->get('Firelike\ShareASale\Validator\FormatParameterValidator'));
        $validator->setXmlFormatParameterValidator($sm->get('Firelike\ShareASale\Validator\XmlFormatParameterValidator'));
        return $validator;
    }

}