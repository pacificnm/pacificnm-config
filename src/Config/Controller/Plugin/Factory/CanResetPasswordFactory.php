<?php
namespace Config\Controller\Plugin\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Config\Controller\Plugin\CanResetPassword;

class CanResetPasswordFactory
{
    /**
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Config\Controller\Plugin\CanResetPassword
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        
        $service = $realServiceLocator->get('Config\Service\ServiceInterface');
        
        return new CanResetPassword($service);
    }
}

