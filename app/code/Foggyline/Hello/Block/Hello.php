<?php

namespace Foggyline\Hello\Block;

class Hello extends \Magento\Framework\View\Element\Template
{
    public function getGreeting()
    {
        return 'Welcome!';
    }
}
