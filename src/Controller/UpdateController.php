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
use Zend\Crypt\BlockCipher;
use Application\Controller\AbstractApplicationController;
use Pacificnm\Config\Service\ServiceInterface;
use Pacificnm\Config\Form\Form;


/**
 *
 * @author jaimie <pacificnm@gmail.com>
 * @version 2.5.0
 *         
 */
class UpdateController extends AbstractApplicationController
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
     * @var array
     */
    protected $config;

    /**
     *
     * @var BlockCipher
     */
    protected $blockCipher;

    /**
     *
     * @param ServiceInterface $configService            
     * @param Form $form            
     * @param array $config            
     */
    public function __construct(ServiceInterface $service, Form $form, array $config)
    {
        $this->service = $service;
        
        $this->form = $form;
        
        $this->config = $config;
        
        $this->blockCipher = BlockCipher::factory('mcrypt', array(
            'algo' => 'aes'
        ));
        
        $this->blockCipher->setKey($this->config['encryption-key']);
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
        
        $entity = $this->service->get(1);
        
        $request = $this->getRequest();
        
        // if we have a post
        if ($request->isPost()) {
            // get post
            $postData = $request->getPost();
            
            $this->form->setData($postData);
            
            // if we are valid
            if ($this->form->isValid()) {
                
                $entity = $this->form->getData();
                
                // check if smtp password is differnt
                if ($entity->getConfigSmtpPassword()) {
                    $entity->setConfigSmtpPassword($this->blockCipher->encrypt($entity->getConfigSmtpPassword()));
                }
                
                $this->service->save($entity);
                
                $this->flashmessenger()->addSuccessMessage('The config was saved');
                
                return $this->redirect()->toRoute('config-index');
            }
        }
        
        $this->form->bind($entity);
        
        if($entity->getConfigSmtpPassword()) {
            $this->form->get('configSmtpPassword')->setValue($this->blockCipher->decrypt($entity->getConfigSmtpPassword()));
        }
        
        // return view model
        return new ViewModel(array(
            'form' => $this->form
        ));
    }
}