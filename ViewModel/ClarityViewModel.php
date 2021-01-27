<?php
/**
 * Class ClarityViewModel
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * This class collect the data to show them in frontend.
 */
namespace MarioSAM\Clarity\ViewModel;

class ClarityViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected $_scopeConfig;

    /**
     * ConsentPopupViewModel constructor.
     *
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\View\Element\Template\Context $context
    )
    {
        $this->_scopeConfig = $scopeConfig;

        //parent::__construct($context);
    }

    /**
     * Inform if this module is set up to enable or disable.
     * 
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->_scopeConfig->getValue('clarity/configurations/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get the clarity ID informed in admin page.
     * 
     * @return text
     */
    public function getTrackingId()
    {
        return $this->_scopeConfig->getValue('clarity/configurations/track_code', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
