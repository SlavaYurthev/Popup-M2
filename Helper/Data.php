<?php
/**
 * Popup
 * 
 * @author Slava Yurthev
 */
namespace SY\Popup\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {
	public function getConfigValue($field, $storeId = null){
		return $this->scopeConfig->getValue(
			'sy_popup/'.$field, 
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE, 
			$storeId
		);
	}
}