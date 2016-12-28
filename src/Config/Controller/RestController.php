<?php
namespace Config\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Config\Service\ServiceInterface;
use Config\Form\Form;
use Zend\View\Model\JsonModel;

class RestController extends AbstractRestfulController
{

    /**
     *
     * @var ServiceInterface
     */
    protected $service;

    /**
     *
     * @var Form
     */
    protected $form;

    /**
     *
     * @param ServiceInterface $service            
     * @param Form $form            
     */
    public function __construct(ServiceInterface $service, Form $form)
    {
        $this->service = $service;
        
        $this->form = $form;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::create()
     */
    public function create($data)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::delete()
     */
    public function delete($id)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::deleteList()
     */
    public function deleteList($data)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::get()
     */
    public function get($id)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::getList()
     */
    public function getList($params)
    {
        $entity = $this->service->get(1);
        
        $data = array(
            'configId' => $entity->getConfigId(),
            'configVersion' => $entity->getConfigVersion(),
            'configCopyYear' => $entity->getConfigCopyYear(),         
            'configCompanyName' => $entity->getConfigCompanyName(),           
            'configCompanyNameShort' => $entity->getConfigCompanyNameShort(),            
            'configCompanyNameAbv' => $entity->getConfigCompanyNameAbv(),            
            'configCompanyStreet' => $entity->getConfigCompanyStreet(),            
            'configCompanyStreetCont' => $entity->getConfigCompanyStreetCont(),            
            'configCompanyCity' => $entity->getConfigCompanyCity(),            
            'configCompanyState' => $entity->getConfigCompanyState(),            
            'configCompanyPostal' => $entity->getConfigCompanyPostal(),            
            'configCompanyPhone' => $entity->getConfigCompanyPhone(),            
            'configCompanyPhoneAlt' => $entity->getConfigCompanyPhoneAlt(),            
            'configHttpAddress' => $entity->getConfigHttpAddress(),            
            'configDateLong' => $entity->getConfigDateLong(),            
            'configDateShort' => $entity->getConfigDateShort(),            
            'configLang' => $entity->getConfigLang(),            
            'configCurrency' => $entity->getConfigCurrency(),            
            'configSmtpHost' => $entity->getConfigSmtpHost(),            
            'configSmtpPort' => $entity->getConfigSmtpPort(),            
            'configSmtpSecurity' => $entity->getConfigSmtpSecurity(),           
            'configSmtpDisplay' => $entity->getConfigSmtpDisplay(),            
            'configSmtpEmail' => $entity->getConfigSmtpEmail(),            
            'configSmtpPassword' => $entity->getConfigSmtpPassword(),            
            'configRegister' => $entity->getConfigRegister(),            
            'configResetPassword' => $entity->getConfigResetPassword()
        );
        
        return new JsonModel(array(
            'content' => $data
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::head()
     */
    public function head($id)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::options()
     */
    public function options()
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::patch()
     */
    public function patch($id, $data)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::replaceList()
     */
    public function replaceList($data)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::patchList()
     */
    public function patchList($data)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::update()
     */
    public function update($id, $data)
    {
        $this->response->setStatusCode(405);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\Mvc\Controller\AbstractRestfulController::notFoundAction()
     */
    public function notFoundAction()
    {
        $this->response->setStatusCode(404);
        
        return new JsonModel(array(
            'content' => 'Method Not Allowed'
        ));
    }
}

