<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-config for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-config/blob/master/LICENSE.md
 */
namespace Pacificnm\Config\Controller;

use Zend\View\Model\ViewModel;
use Pacificnm\Controller\AbstractApplicationController;
use Pacificnm\Config\Service\ConfigServiceInterface;
use Pacificnm\Config\Service\ServiceInterface;

/**
 *
 * @author jaimie <pacificnm@gmail.com>
 * @version 2.5.0
 *         
 */
class IndexController extends AbstractApplicationController
{

    protected $service;

    /**
     *
     * @param ConfigServiceInterface $configService            
     */
    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractActionController::indexAction()
     */
    public function indexAction()
    {
        parent::indexAction();
        
        $configEntity = $this->service->get(1);
        
        return new ViewModel(array(
            'configEntity' => $configEntity
        ));
    }
}
