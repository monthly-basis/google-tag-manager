<?php
namespace MonthlyBasis\GoogleTagManager\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use MonthlyBasis\Website\Model\Entity as WebsiteEntity;

class BodyHtml extends AbstractHelper
{
    /**
     * @throws TypeError If WebsiteEntity\Website::googleTagManagerId
     *                   property does not exist
     */
    public function __invoke(WebsiteEntity\Website $websiteEntity): string
    {
        $googleTagManagerId = $websiteEntity->getGoogleTagManagerId();
return <<<HTML
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=$googleTagManagerId"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
HTML;
    }
}
