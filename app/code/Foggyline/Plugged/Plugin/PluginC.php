<?php

namespace Foggyline\Plugged\Plugin;

class PluginC
{
    public function beforeGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject
    )
    {
        var_dump('PluginC::beforeGetName');
    }

    public function afterGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject,
        $result
    )
    {
        var_dump('PluginC::afterGetName');
        return $result;
    }

    public function aroundGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject,
        callable $proceed
    )
    {
        var_dump('PluginC::aroundGetName');
        return $proceed();
    }
}
