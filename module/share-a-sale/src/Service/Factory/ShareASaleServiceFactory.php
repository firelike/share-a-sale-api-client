<?php

namespace ShareASale\Service\Factory;


use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class ShareASaleServiceFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $service = new \ShareASale\Service\ShareASaleService();

        $config = $sm->get('Config');
        if (isset($config['shareasale_service'])) {

            if (isset($config['shareasale_service']['service_url'])) {
                $service->setServiceUrl($config['shareasale_service']['service_url']);
            }

            if (isset($config['shareasale_service']['service_version'])) {
                $service->setVersion($config['shareasale_service']['service_version']);
            }

            if (isset($config['shareasale_service']['affiliate_id'])) {
                $service->setAffiliateId($config['shareasale_service']['affiliate_id']);
            }

            if (isset($config['shareasale_service']['token'])) {
                $service->setToken($config['shareasale_service']['token']);
            }

            if (isset($config['shareasale_service']['secret_key'])) {
                $service->setSecretKey($config['shareasale_service']['secret_key']);
            }

        }

        $service->setBasicServiceMethodValidator($sm->get('ShareASale\Validator\BasicServiceMethodParametersValidator'));

        return $service;
    }

}