<?php

namespace Foggyline\Hello\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Foggyline\Hello\Controller\Index
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}
