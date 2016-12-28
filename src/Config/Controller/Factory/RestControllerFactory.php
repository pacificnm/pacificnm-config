<?php
namespace Config\Controller\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Config\Controller\RestController;

class RestControllerFactory
{
    /**
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Config\Controller\RestController
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        
        $service = $realServiceLocator->get('Config\Service\ServiceInterface');
        
        $form = $realServiceLocator->get('Config\Form\Form');
        
        return new RestController($service, $form);
    }
}

