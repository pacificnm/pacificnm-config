<?php
namespace Config\Controller\Plugin;


use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Config\Service\ServiceInterface;

class CanResetPassword extends AbstractPlugin
{
    /**
     * 
     * @var ServiceInterface
     */
    protected $service;

    
    /**
     *
     * @param ServiceInterface $service
     */
    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }
    
    /**
     * 
     * @return boolean
     */
    public function __invoke()
    {
        $entity = $this->service->get(1);
        
        if($entity->getConfigResetPassword() == 1) {
            return true;
        } else {
            return false;
        }
    }
}

