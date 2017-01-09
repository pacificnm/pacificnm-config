<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-config for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-config/blob/master/LICENSE.md
 */
namespace Pacificnm\Config\Form;

use Zend\Form\Form as ZendForm;
use Zend\InputFilter\InputFilterProviderInterface;
use Pacificnm\Config\Hydrator\Hydrator;
use Pacificnm\Config\Entity\Entity;
use Pacificnm\Theme\Service\ServiceInterface as ThemeServiceInterface;

/**
 *
 * @author jaimie <pacificnm@gmail.com>
 * @version 2.5.0
 *         
 */
class Form extends ZendForm implements InputFilterProviderInterface
{
    /**
     * 
     * @var ThemeServiceInterface
     */
    protected $themeService;
    
    
    /**
     * 
     * @param ThemeServiceInterface $themeService
     * @param string $name
     * @param array $options
     * @return \Pacificnm\Config\Form\Form
     */
    function __construct(ThemeServiceInterface $themeService, $name = 'config-form', $options = array())
    {
        parent::__construct($name, $options);
        
        $this->setHydrator(new Hydrator(false));
        
        $this->setObject(new Entity());
        
        $this->themeService = $themeService;
        
        // configId
        $this->add(array(
            'name' => 'configId',
            'type' => 'hidden'
        ));
        
        // configVersion
        $this->add(array(
            'name' => 'configVersion',
            'type' => 'hidden'
        ));
        
        // configThemeId
        $this->add(array(
            'name' => 'configThemeId',
            'type' => 'select',
            'options' => array(
                'label' => 'Theme:',
                'value_options' => $this->getThemeOptions()
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configThemeId'
            )
        ));
        
        
        // configCopyYear
        $this->add(array(
            'name' => 'configCopyYear',
            'type' => 'Text',
            'options' => array(
                'label' => 'Copyright Year:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCopyYear'
            )
        ));
        
        // configCompanyName
        $this->add(array(
            'name' => 'configCompanyName',
            'type' => 'Text',
            'options' => array(
                'label' => 'Company Full Name:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyName'
            )
        ));
        
        // configCompanyNameShort
        $this->add(array(
            'name' => 'configCompanyNameShort',
            'type' => 'Text',
            'options' => array(
                'label' => 'Company Short Name:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyNameShort'
            )
        ));
        
        // configCompanyNameAbv
        $this->add(array(
            'name' => 'configCompanyNameAbv',
            'type' => 'Text',
            'options' => array(
                'label' => 'Company Abbreviation:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyNameAbv'
            )
        ));
        
        // configCompanyStreet
        $this->add(array(
            'name' => 'configCompanyStreet',
            'type' => 'Text',
            'options' => array(
                'label' => 'Street:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyStreet'
            )
        ));
        
        // configCompanyStreetCont
        $this->add(array(
            'name' => 'configCompanyStreetCont',
            'type' => 'Text',
            'options' => array(
                'label' => 'Street Cont:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyStreetCont'
            )
        ));
        
        // configCompanyCity
        $this->add(array(
            'name' => 'configCompanyCity',
            'type' => 'Text',
            'options' => array(
                'label' => 'City:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyCity'
            )
        ));
        
        // configCompanyState
        $this->add(array(
            'name' => 'configCompanyState',
            'type' => 'Text',
            'options' => array(
                'label' => 'State:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyState'
            )
        ));
        
        // configCompanyPostal
        $this->add(array(
            'name' => 'configCompanyPostal',
            'type' => 'Text',
            'options' => array(
                'label' => 'Postal Code:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyPostal'
            )
        ));
        
        // configCompanyPhone
        $this->add(array(
            'name' => 'configCompanyPhone',
            'type' => 'Text',
            'options' => array(
                'label' => 'Phone Number:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyPhone'
            )
        ));
        
        // configCompanyPhoneAlt
        $this->add(array(
            'name' => 'configCompanyPhoneAlt',
            'type' => 'Text',
            'options' => array(
                'label' => 'Alternate Phone Number:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCompanyPhoneAlt'
            )
        ));
        
        // configHttpAddress
        $this->add(array(
            'name' => 'configHttpAddress',
            'type' => 'hidden'
        ));
        
        // configDateLong
        $this->add(array(
            'type' => 'Select',
            'name' => 'configDateLong',
            'options' => array(
                'label' => 'Date Long:',
                'value_options' => array(
                    'F j, Y h:i a' => 'November 6, 2010 3:00 pm',
                    'F j, Y H:i a' => 'November 6, 2010 15:00 pm',
                    'M j, Y h:i a' => 'Nov 6, 2010 3:00 pm',
                    'M j, Y H:i a' => 'Nov 6, 2010 15:00 pm',
                    'm-d-Y h:i a' => '11-6-2010 3:00 pm',
                    'm-d-Y H:i a' => '11-6-2010 15:00 pm',
                    'm/d/Y h:i a' => '11/6/2010 3:00 pm',
                    'm/d/Y H:i a' => '11/6/2010 15:00 pm'
                )
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configDateLong'
            )
        ));
        
        // configDateShort
        $this->add(array(
            'type' => 'Select',
            'name' => 'configDateShort',
            'options' => array(
                'label' => 'Date Short:',
                'value_options' => array(
                    'm/d/Y' => '11/6/2010'
                )
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configDateShort'
            )
        ));
        
        // configLang
        $this->add(array(
            'type' => 'Select',
            'name' => 'configLang',
            'options' => array(
                'label' => 'Language:',
                'value_options' => array(
                    'en_US' => 'en_Us'
                )
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configLang'
            )
        ));
        
        // configCurrency
        $this->add(array(
            'type' => 'Select',
            'name' => 'configCurrency',
            'options' => array(
                'label' => 'Currency:',
                'value_options' => array(
                    'USD' => 'USD'
                )
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configCurrency'
            )
        ));
        
        // configSmtpHost
        $this->add(array(
            'name' => 'configSmtpHost',
            'type' => 'Text',
            'options' => array(
                'label' => 'SMTP Host:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configSmtpHost'
            )
        ));
        
        // configSmtpPort
        $this->add(array(
            'name' => 'configSmtpPort',
            'type' => 'Text',
            'options' => array(
                'label' => 'SMTP Port:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configSmtpPort'
            )
        ));
        
        // configSmtpSecurity
        $this->add(array(
            'type' => 'Select',
            'name' => 'configSmtpSecurity',
            'options' => array(
                'label' => 'SMTP Security:',
                'value_options' => array(
                    'None' => 'None',
                    'PLAIN AUTH' => 'PLAIN AUTH',
                    'LOGIN AUTH' => 'LOGIN AUTH',
                    'CRAM-MD5 AUTH' => 'CRAM-MD5 AUTH',
                    'PLAIN AUTH over TLS' => 'PLAIN AUTH over TLS'
                )
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configSmtpSecurity'
            )
        ));
        // configSmtpDisplay
        $this->add(array(
            'name' => 'configSmtpDisplay',
            'type' => 'Text',
            'options' => array(
                'label' => 'SMTP Display Name:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configSmtpDisplay'
            )
        ));
        
        // configSmtpEmail
        $this->add(array(
            'name' => 'configSmtpEmail',
            'type' => 'Text',
            'options' => array(
                'label' => 'SMTP E-Mail Address:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configSmtpEmail'
            )
        ));
        
        // configSmtpPassword
        $this->add(array(
            'name' => 'configSmtpPassword',
            'type' => 'Text',
            'options' => array(
                'label' => 'SMTP Password:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'configSmtpPassword'
            )
        ));
        
        // configRegister
        $this->add(array(
            'type' => 'Checkbox',
            'name' => 'configRegister',
            'options' => array(
                'label' => 'Enable Register',
                'use_hidden_element' => true,
                'checked_value' => '1',
                'unchecked_value' => '0'
            ),
            'attributes' => array(
                'id' => 'configRegister'
            )
        ));
        
        // configResetPassword
        $this->add(array(
            'type' => 'Checkbox',
            'name' => 'configResetPassword',
            'options' => array(
                'label' => 'Enable Password Reset',
                'use_hidden_element' => true,
                'checked_value' => '1',
                'unchecked_value' => '0'
            ),
            'attributes' => array(
                'id' => 'configResetPassword'
            )
        ));
        
        // button
        $this->add(array(
            'name' => 'submit',
            'type' => 'button',
            'attributes' => array(
                'value' => 'Submit',
                'id' => 'submit',
                'class' => 'btn btn-primary btn-flat'
            )
        ));
        
        return $this;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Zend\InputFilter\InputFilterProviderInterface::getInputFilterSpecification()
     */
    public function getInputFilterSpecification()
    {
        return array()

        ;
    }
    
    protected function getThemeOptions()
    {
        $options = array();
        
        $entitys = $this->themeService->getAll(array(
            'pagination' => 'off',
            'themeActive' => 1
        ));
        
        foreach($entitys as $entity) {
            $options[$entity->getThemeId()] = $entity->getThemeName();
        }
        
        return $options;
    }
}
