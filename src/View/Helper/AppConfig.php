<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-config for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-config/blob/master/LICENSE.md
 */
namespace Pacificnm\Config\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Pacificnm\Config\Service\ServiceInterface;

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