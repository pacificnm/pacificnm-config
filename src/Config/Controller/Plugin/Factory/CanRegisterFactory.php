<?php
namespace Config\Controller\Plugin\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Config\Controller\Plugin\CanRegister;

class CanRegisterFactory
{
    /**
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Config\Controller\Plugin\CanRegister
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        
        $service = $realServiceLocator->get('Config\Service\ServiceInterface');
        
        return new CanRegister($service);
    }
}

