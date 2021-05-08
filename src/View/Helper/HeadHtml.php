<?php
namespace MonthlyBasis\GoogleTagManager\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use MonthlyBasis\Website\Model\Entity as WebsiteEntity;
use TypeError;

class HeadHtml extends AbstractHelper
{
    /**
     * @throws TypeError If WebsiteEntity\Website::googleTagManagerId
     *                   property does not exist
     */
    public function __invoke(WebsiteEntity\Website $websiteEntity): string
    {
        $googleTagManagerId = $websiteEntity->getGoogleTagManagerId();
return <<<HTML
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MNXD25V');</script>
<!-- End Google Tag Manager -->
HTML;
    }
}
