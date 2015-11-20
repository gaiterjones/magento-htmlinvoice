<?php

class PAJ_HTMLinvoice_Block_Adminhtml_Invoice extends Mage_Adminhtml_Block_Template
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate($this->_getCurrentTemplate());
    }

	protected function _prepareLayout()
    {
	
    }
	
	protected function getOrder()
	{
		 return Mage::registry('sales_order');
	}

    /**
     * @return string
     */
    private function _getCurrentTemplate(){
        $template=trim(Mage::getStoreConfig('htmlinvoice_section1/general/templatefile', 'invoice' ));
        return 'paj/htmlinvoice/'.(empty($template)?'invoice':$template).'.phtml';
    }
	
}