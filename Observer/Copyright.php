<?php
/**
 * Popup
 * 
 * @author Slava Yurthev
 */
namespace SY\Popup\Observer;
class Copyright implements \Magento\Framework\Event\ObserverInterface {
	public function execute(\Magento\Framework\Event\Observer $observer){
		$observer->getLayout()->addBlock(
			'Magento\Framework\View\Element\Text', 
			'sy.copyright.popup', 
			'sy.copyright'
		)->setData(
			'text',
			'<a href="https://slavayurthev.github.io/magento-2/extensions/popup/">Magento 2 Popup Extension</a>'
		);
		return $this;
	}
}