<?php

namespace  Redbox\Linkedin\Helpers;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 *
 * @package Redbox\Linkedin\Helpers
 */
class Config
{
    const CONFIG_AVAILABILITY_INVISIBLE = 'invisible';
    const CONFIG_AVAILABILITY_OPTIONAL  = 'optional';
    const CONFIG_AVAILABILITY_REQUIRED  = 'required';
    const XML_PATH_CONFIG_AVAILABILITY  = 'redbox_app_settings/linkedin_profile/availability';
    
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * EnableLogging constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }
    
    public function getLinkedinAvailability() {
        return $this->scopeConfig->getValue(self::XML_PATH_CONFIG_AVAILABILITY);
    }

}
