<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-config for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-config/blob/master/LICENSE.md
 */
namespace Pacificnm\Config\Entity;

use Pacificnm\Theme\Entity\Entity as ThemeEntity;

/**
 *
 * @author jaimie <pacificnm@gmail.com>
 * @version 2.5.0
 *         
 */
class Entity
{

    /**
     *
     * @var number
     */
    protected $configId;

    /**
     *
     * @var string
     */
    protected $configVersion;

    /**
     *
     * @var string
     */
    protected $configCopyYear;

    /**
     *
     * @var string
     */
    protected $configCompanyName;

    /**
     *
     * @var string
     */
    protected $configCompanyNameShort;

    /**
     *
     * @var string
     */
    protected $configCompanyNameAbv;

    /**
     *
     * @var string
     */
    protected $configCompanyStreet;

    /**
     *
     * @var string
     */
    protected $configCompanyStreetCont;

    /**
     *
     * @var string
     */
    protected $configCompanyCity;

    /**
     *
     * @var string
     */
    protected $configCompanyState;

    /**
     *
     * @var string
     */
    protected $configCompanyPostal;

    /**
     *
     * @var string
     */
    protected $configCompanyPhone;

    /**
     *
     * @var string
     */
    protected $configCompanyPhoneAlt;

    /**
     *
     * @var string
     */
    protected $configHttpAddress;

    /**
     *
     * @var string
     */
    protected $configDateLong;

    /**
     *
     * @var string
     */
    protected $configDateShort;

    /**
     *
     * @var string
     */
    protected $configLang;

    /**
     *
     * @var string
     */
    protected $configCurrency;

    /**
     *
     * @var string
     */
    protected $configSmtpHost;

    /**
     *
     * @var number
     */
    protected $configSmtpPort;

    /**
     *
     * @var string
     */
    protected $configSmtpSecurity;

    /**
     *
     * @var string
     */
    protected $configSmtpDisplay;

    /**
     *
     * @var string
     */
    protected $configSmtpEmail;

    /**
     *
     * @var string
     */
    protected $configSmtpPassword;

    /**
     *
     * @var bool
     */
    protected $configRegister;

    /**
     *
     * @var bool
     */
    protected $configResetPassword;

    /**
     *
     * @var string
     */
    protected $configThemeId;

    /**
     *
     * @var ThemeEntity
     */
    protected $themeEntity;

    /**
     *
     * @return the $configId
     */
    public function getConfigId()
    {
        return $this->configId;
    }

    /**
     *
     * @return the $configVersion
     */
    public function getConfigVersion()
    {
        return $this->configVersion;
    }

    /**
     *
     * @return the $configCopyYear
     */
    public function getConfigCopyYear()
    {
        return $this->configCopyYear;
    }

    /**
     *
     * @return the $configCompanyName
     */
    public function getConfigCompanyName()
    {
        return $this->configCompanyName;
    }

    /**
     *
     * @return the $configCompanyNameShort
     */
    public function getConfigCompanyNameShort()
    {
        return $this->configCompanyNameShort;
    }

    /**
     *
     * @return the $configCompanyNameAbv
     */
    public function getConfigCompanyNameAbv()
    {
        return $this->configCompanyNameAbv;
    }

    /**
     *
     * @return the $configCompanyStreet
     */
    public function getConfigCompanyStreet()
    {
        return $this->configCompanyStreet;
    }

    /**
     *
     * @return the $configCompanyStreetCont
     */
    public function getConfigCompanyStreetCont()
    {
        return $this->configCompanyStreetCont;
    }

    /**
     *
     * @return the $configCompanyCity
     */
    public function getConfigCompanyCity()
    {
        return $this->configCompanyCity;
    }

    /**
     *
     * @return the $configCompanyState
     */
    public function getConfigCompanyState()
    {
        return $this->configCompanyState;
    }

    /**
     *
     * @return the $configCompanyPostal
     */
    public function getConfigCompanyPostal()
    {
        return $this->configCompanyPostal;
    }

    /**
     *
     * @return the $configCompanyPhone
     */
    public function getConfigCompanyPhone()
    {
        return $this->configCompanyPhone;
    }

    /**
     *
     * @return the $configCompanyPhoneAlt
     */
    public function getConfigCompanyPhoneAlt()
    {
        return $this->configCompanyPhoneAlt;
    }

    /**
     *
     * @return the $configHttpAddress
     */
    public function getConfigHttpAddress()
    {
        return $this->configHttpAddress;
    }

    /**
     *
     * @return the $configDateLong
     */
    public function getConfigDateLong()
    {
        return $this->configDateLong;
    }

    /**
     *
     * @return the $configDateShort
     */
    public function getConfigDateShort()
    {
        return $this->configDateShort;
    }

    /**
     *
     * @return the $configLang
     */
    public function getConfigLang()
    {
        return $this->configLang;
    }

    /**
     *
     * @return the $configCurrency
     */
    public function getConfigCurrency()
    {
        return $this->configCurrency;
    }

    /**
     *
     * @return the $configSmtpHost
     */
    public function getConfigSmtpHost()
    {
        return $this->configSmtpHost;
    }

    /**
     *
     * @return the $configSmtpPort
     */
    public function getConfigSmtpPort()
    {
        return $this->configSmtpPort;
    }

    /**
     *
     * @return the $configSmtpSecurity
     */
    public function getConfigSmtpSecurity()
    {
        return $this->configSmtpSecurity;
    }

    /**
     *
     * @return the $configSmtpDisplay
     */
    public function getConfigSmtpDisplay()
    {
        return $this->configSmtpDisplay;
    }

    /**
     *
     * @return the $configSmtpEmail
     */
    public function getConfigSmtpEmail()
    {
        return $this->configSmtpEmail;
    }

    /**
     *
     * @return the $configSmtpPassword
     */
    public function getConfigSmtpPassword()
    {
        return $this->configSmtpPassword;
    }

    /**
     *
     * @return the $configRegister
     */
    public function getConfigRegister()
    {
        return $this->configRegister;
    }

    /**
     *
     * @return the $configResetPassword
     */
    public function getConfigResetPassword()
    {
        return $this->configResetPassword;
    }

    /**
     *
     * @return the $configThemeId
     */
    public function getConfigThemeId()
    {
        return $this->configThemeId;
    }

    /**
     *
     * @return the $themeEntity
     */
    public function getThemeEntity()
    {
        return $this->themeEntity;
    }

    /**
     *
     * @param number $configId            
     */
    public function setConfigId($configId)
    {
        $this->configId = $configId;
    }

    /**
     *
     * @param string $configVersion            
     */
    public function setConfigVersion($configVersion)
    {
        $this->configVersion = $configVersion;
    }

    /**
     *
     * @param string $configCopyYear            
     */
    public function setConfigCopyYear($configCopyYear)
    {
        $this->configCopyYear = $configCopyYear;
    }

    /**
     *
     * @param string $configCompanyName            
     */
    public function setConfigCompanyName($configCompanyName)
    {
        $this->configCompanyName = $configCompanyName;
    }

    /**
     *
     * @param string $configCompanyNameShort            
     */
    public function setConfigCompanyNameShort($configCompanyNameShort)
    {
        $this->configCompanyNameShort = $configCompanyNameShort;
    }

    /**
     *
     * @param string $configCompanyNameAbv            
     */
    public function setConfigCompanyNameAbv($configCompanyNameAbv)
    {
        $this->configCompanyNameAbv = $configCompanyNameAbv;
    }

    /**
     *
     * @param string $configCompanyStreet            
     */
    public function setConfigCompanyStreet($configCompanyStreet)
    {
        $this->configCompanyStreet = $configCompanyStreet;
    }

    /**
     *
     * @param string $configCompanyStreetCont            
     */
    public function setConfigCompanyStreetCont($configCompanyStreetCont)
    {
        $this->configCompanyStreetCont = $configCompanyStreetCont;
    }

    /**
     *
     * @param string $configCompanyCity            
     */
    public function setConfigCompanyCity($configCompanyCity)
    {
        $this->configCompanyCity = $configCompanyCity;
    }

    /**
     *
     * @param string $configCompanyState            
     */
    public function setConfigCompanyState($configCompanyState)
    {
        $this->configCompanyState = $configCompanyState;
    }

    /**
     *
     * @param string $configCompanyPostal            
     */
    public function setConfigCompanyPostal($configCompanyPostal)
    {
        $this->configCompanyPostal = $configCompanyPostal;
    }

    /**
     *
     * @param string $configCompanyPhone            
     */
    public function setConfigCompanyPhone($configCompanyPhone)
    {
        $this->configCompanyPhone = $configCompanyPhone;
    }

    /**
     *
     * @param string $configCompanyPhoneAlt            
     */
    public function setConfigCompanyPhoneAlt($configCompanyPhoneAlt)
    {
        $this->configCompanyPhoneAlt = $configCompanyPhoneAlt;
    }

    /**
     *
     * @param string $configHttpAddress            
     */
    public function setConfigHttpAddress($configHttpAddress)
    {
        $this->configHttpAddress = $configHttpAddress;
    }

    /**
     *
     * @param string $configDateLong            
     */
    public function setConfigDateLong($configDateLong)
    {
        $this->configDateLong = $configDateLong;
    }

    /**
     *
     * @param string $configDateShort            
     */
    public function setConfigDateShort($configDateShort)
    {
        $this->configDateShort = $configDateShort;
    }

    /**
     *
     * @param string $configLang            
     */
    public function setConfigLang($configLang)
    {
        $this->configLang = $configLang;
    }

    /**
     *
     * @param string $configCurrency            
     */
    public function setConfigCurrency($configCurrency)
    {
        $this->configCurrency = $configCurrency;
    }

    /**
     *
     * @param string $configSmtpHost            
     */
    public function setConfigSmtpHost($configSmtpHost)
    {
        $this->configSmtpHost = $configSmtpHost;
    }

    /**
     *
     * @param number $configSmtpPort            
     */
    public function setConfigSmtpPort($configSmtpPort)
    {
        $this->configSmtpPort = $configSmtpPort;
    }

    /**
     *
     * @param string $configSmtpSecurity            
     */
    public function setConfigSmtpSecurity($configSmtpSecurity)
    {
        $this->configSmtpSecurity = $configSmtpSecurity;
    }

    /**
     *
     * @param string $configSmtpDisplay            
     */
    public function setConfigSmtpDisplay($configSmtpDisplay)
    {
        $this->configSmtpDisplay = $configSmtpDisplay;
    }

    /**
     *
     * @param string $configSmtpEmail            
     */
    public function setConfigSmtpEmail($configSmtpEmail)
    {
        $this->configSmtpEmail = $configSmtpEmail;
    }

    /**
     *
     * @param string $configSmtpPassword            
     */
    public function setConfigSmtpPassword($configSmtpPassword)
    {
        $this->configSmtpPassword = $configSmtpPassword;
    }

    /**
     *
     * @param boolean $configRegister            
     */
    public function setConfigRegister($configRegister)
    {
        $this->configRegister = $configRegister;
    }

    /**
     *
     * @param boolean $configResetPassword            
     */
    public function setConfigResetPassword($configResetPassword)
    {
        $this->configResetPassword = $configResetPassword;
    }

    /**
     *
     * @param string $configThemeId            
     */
    public function setConfigThemeId($configThemeId)
    {
        $this->configThemeId = $configThemeId;
    }

    /**
     *
     * @param \Pacificnm\Theme\Entity\Entity $themeEntity            
     */
    public function setThemeEntity($themeEntity)
    {
        $this->themeEntity = $themeEntity;
    }
}