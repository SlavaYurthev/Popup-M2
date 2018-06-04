<?php
/**
 * Popup
 * 
 * @author Slava Yurthev
 */
namespace SY\Popup\Block\Adminhtml\System\Config\Form\Field;
class Editor extends \Magento\Config\Block\System\Config\Form\Field {
	public function __construct(
		\Magento\Backend\Block\Template\Context $context,
		\Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
		array $data = []
	) {
		$this->_wysiwygConfig = $wysiwygConfig;
		parent::__construct($context, $data);
	}
	protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
		$element->setWysiwyg(true);
		$element->setConfig($this->_wysiwygConfig->getConfig($element));
		return parent::_getElementHtml($element);
	}
}