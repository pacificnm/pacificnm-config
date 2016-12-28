<?php
namespace Config\Form\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Config\Form\Form;

class FormFactory
{
    /**
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Config\Form\Form
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        return new Form();
    }
}

