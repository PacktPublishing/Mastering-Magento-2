<?php

namespace Foggyline\Plugged\Plugin\Catalog\Product;

class FlagNew
{
    protected $request;

    public function __construct(
        \Magento\Framework\App\Request\Http $request
    )
    {
        $this->request = $request;
    }

    public function afterGetName(
        \Magento\Catalog\Api\Data\ProductInterface $subject,
        $result
    )
    {
        $createdAt = strtotime($subject->getCreatedAt());
        if ($this->request->getFullActionName() == 'catalog_product_view'
            && ($createdAt > (\time() - (48 * 60 * 60)))
            && ($createdAt < \time())) {
            return __('[NEW] %1', $result);
        }

        return $result;
    }
}
