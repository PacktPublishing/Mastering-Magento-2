<?php

namespace Foggyline\Plugged\Plugin;

class PluginB
{
    public function beforeGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject
    )
    {
        var_dump('PluginB::beforeGetName');
    }

    public function afterGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject,
        $result
    )
    {
        var_dump('PluginB::afterGetName');
        return $result;
    }

    public function aroundGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject,
        callable $proceed
    )
    {
        var_dump('PluginB::aroundGetName');
        return $proceed();
    }
}
