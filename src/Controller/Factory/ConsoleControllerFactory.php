<?php
namespace Firelike\ShareASale\Controller\Factory;


use Firelike\ShareASale\Controller\ConsoleController;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class ConsoleControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {

        $service = $sm->get('Firelike\ShareASale\Service\ShareASaleService');

        $controller = new ConsoleController();
        $controller->setService($service);

        return $controller;

    }

}