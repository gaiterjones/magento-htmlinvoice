<?php

class PAJ_HTMLinvoice_Block_Adminhtml_Invoice extends Mage_Adminhtml_Block_Template
{

    public function __construct()
    {
        parent::__construct();
        $template=trim(Mage::getStoreConfig('htmlinvoice_section1/general/templatefile', 'invoice' ));
        $this->setTemplate('paj/htmlinvoice/'.(empty($template)?'invoice':$template).'.phtml');
    }

	protected function _prepareLayout()
    {
	
    }
	
	protected function getOrder()
	{
		 return Mage::registry('sales_order');
	}
}