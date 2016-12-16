<?php
namespace ShareASale\Controller\Factory;


use ShareASale\Controller\ConsoleController;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class ConsoleControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {

        $service = $sm->get('ShareASale\Service\ShareASaleService');

        $controller = new ConsoleController();
        $controller->setService($service);

        return $controller;

    }

}