<?php
namespace Training\Test\Controller\Block;

class Text extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Magento\Framework\View\Element\Text');
        $block->setText("<b>Hello world from text block !</b>");
        $this->getResponse()->appendBody($block->toHtml());
    }
}