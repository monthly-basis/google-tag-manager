<?php
namespace MonthlyBasis\GoogleTagManager;

use MonthlyBasis\GoogleTagManager\View\Helper as GoogleTagManagerHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'getBodyHtml' => GoogleTagManagerHelper\BodyHtml::class,
                    'getHeadHtml' => GoogleTagManagerHelper\HeadHtml::class,
                ],
                'factories' => [
                    GoogleTagManagerHelper\BodyHtml::class => function ($sm) {
                        return new GoogleTagManagerHelper\BodyHtml();
                    },
                    GoogleTagManagerHelper\HeadHtml::class => function ($sm) {
                        return new GoogleTagManagerHelper\HeadHtml();
                    },
                ],
            ],
        ];
    }
}
