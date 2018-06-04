<?php
/**
 * Popup
 * 
 * @author Slava Yurthev
 */
namespace SY\Popup\Block;
class Popup extends \Magento\Framework\View\Element\Template {
	protected $filterProvider;
	protected $helper;
	protected $storeManager;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento\Cms\Model\Template\FilterProvider $filterProvider,
		\SY\Popup\Helper\Data $helper,
		array $data = []
	){
		$this->helper = $helper;
		$this->filterProvider = $filterProvider;
		$this->storeManager = $context->getStoreManager();
		parent::__construct($context, $data);
	}
	public function getContent(){
		return $this->filterProvider
			->getBlockFilter()
			->filter(
				$this->helper->getConfigValue(
					'general/content',
					$this->storeManager->getStore()->getId()
				)
			);
	}
	public function getLifetime(){
		return (int)$this->helper->getConfigValue(
			'general/lifetime',
			$this->storeManager->getStore()->getId()
		);
	}
}