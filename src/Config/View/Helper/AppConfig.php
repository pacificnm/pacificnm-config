<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link      https://github.com/pacificnm/pnm for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license
 */
namespace Config\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Config\Service\ServiceInterface;

/**
 *
 * @author jaimie <pacificnm@gmail.com>
 * @version 2.5.0
 *         
 */
class AppConfig extends AbstractHelper
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
        try {
            $this->service = $service;
        } catch (\Exception $e) {}
    }

    /**
     *
     * @return \Config\Entity\ConfigEntity
     */
    public function __invoke()
    {
        try {
            return $this->service->get(1);
        } catch (\Exception $e) {}
    }
}