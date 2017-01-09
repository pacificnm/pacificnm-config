<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-config for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-config/blob/master/LICENSE.md
 */
namespace Pacificnm\Config\Form\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\Config\Form\Form;

class FormFactory
{
    /**
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Pacificnm\Config\Form\Form
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $themeService = $serviceLocator->get('Pacificnm\Theme\Service\ServiceInterface');
        
        return new Form($themeService);
    }
}

