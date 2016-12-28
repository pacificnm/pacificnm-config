<?php
namespace Config\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Config\Service\ServiceInterface;
use Zend\Console\Adapter\AdapterInterface;
use RuntimeException;
use Zend\Console\Request as ConsoleRequest;

class ConsoleController extends AbstractActionController
{
    /**
     * 
     * @var ServiceInterface
     */
    protected $service;
    
    /**
     * 
     * @var AdapterInterface
     */
    protected $console;
    
    /**
     * 
     * @param ServiceInterface $service
     * @param AdapterInterface $console
     */
    public function __construct(ServiceInterface $service, AdapterInterface $console)
    {
        $this->service = $service;
        
        $this->console = $console;
    }
    
    public function indexAction()
    {
        $request = $this->getRequest();
        
        // validate we are in a console
        if (! $request instanceof ConsoleRequest) {
            throw new RuntimeException('Cannot handle request of type ' . get_class($request));
        }
    }
}

