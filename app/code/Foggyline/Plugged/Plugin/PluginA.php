<?php

namespace Foggyline\Plugged\Plugin;

class PluginA
{
    public function beforeGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject
    )
    {
        var_dump('PluginA::beforeGetName');
    }

    public function afterGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject,
        $result
    )
    {
        var_dump('PluginA::afterGetName');
        return $result;
    }

    public function aroundGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject,
        callable $proceed
    )
    {
        var_dump('PluginA::aroundGetName');
        return $proceed();
    }
}
