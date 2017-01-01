<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-config for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-config/blob/master/LICENSE.md
 */
namespace Pacificnm\Config\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Console\Adapter\AdapterInterface;
use Zend\Console\Request as ConsoleRequest;
use RuntimeException;
use Pacificnm\Config\Service\ServiceInterface;

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

