<?php

namespace Foggyline\Plugged\Plugin\Catalog\Product;

class SetRemoteReviews
{
    public function aroundGetReviewsSummaryHtml(
        \Magento\Catalog\Block\Product\AbstractProduct $subject,
        callable $proceed,
        \Magento\Catalog\Model\Product $product,
        $templateType = false,
        $displayIfNoReviews = false
    )
    {
        if (false) {
            return $proceed($product, $templateType, $displayIfNoReviews);
        }

        if (true) {
            return '<div class="product-reviews-summary">REMOTE REVIEWS SUMMARY</div>';
        } else {
            return '';
        }
    }
}
