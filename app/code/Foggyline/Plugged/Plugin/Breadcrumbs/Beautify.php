<?php

namespace Foggyline\Plugged\Plugin\Breadcrumbs;

class Beautify
{
    public function beforeAddCrumb(
        \Magento\Theme\Block\Html\Breadcrumbs $subject,
        $crumbName,
        $crumbInfo
    )
    {
        $label = $crumbInfo['label'];

        if ($label instanceof \Magento\Framework\Phrase) {
            $label = $label->render();
        }

        $crumbInfo['label'] = __('&hearts; %1 &hearts;', $label);

        return [$crumbName, $crumbInfo];
    }
}
