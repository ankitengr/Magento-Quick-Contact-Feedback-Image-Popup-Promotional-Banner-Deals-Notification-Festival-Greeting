<?php
/**
 * Webfrnd Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://webfrnd.com/LICENSE-M1.txt
 *
 * @category   WF
 * @package    WF_All
 * @copyright  Copyright (c) 2010-2014 Webfrnd Co. (http://www.webfrnd.com)
 * @license    http://webfrnd.com/LICENSE-M1.txt
 */ 


class Webfrnd_QuickContact_Block_Info extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		
		$html = $this->_getHeaderHtml($element);
		
		$html.= $this->_getFieldHtml($element);
        
        $html .= $this->_getFooterHtml($element);

        return $html;
    }

   

	protected function _getFieldHtml($fieldset)
    {
		$content = 'This extension is developed by <a href="http://webfrnd.com/">webfrnd.com</a>';
		return $content;
    }
}
