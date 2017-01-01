<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-config for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-config/blob/master/LICENSE.md
 */
namespace Pacificnm\Config\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Pacificnm\Config\Service\ServiceInterface;

class CanRegister extends AbstractPlugin
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
        
        if($entity->getConfigRegister() == 1) {
            return true;
        } else {
            return false;
        }
    }
}

