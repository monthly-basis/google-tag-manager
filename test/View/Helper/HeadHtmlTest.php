<?php
namespace MonthlyBasis\GoogleTagManagerTest;

use MonthlyBasis\GoogleTagManager\View\Helper as GoogleTagManagerHelper;
use MonthlyBasis\LaminasTest\ModuleTestCase;
use MonthlyBasis\Website\Model\Entity as WebsiteEntity;
use PHPUnit\Framework\TestCase;

class HeadHtmlTestTest extends TestCase
{
    protected function setUp(): void
    {
        $this->headHtmlHelper = new GoogleTagManagerHelper\HeadHtml();
    }

    public function test___invoke()
    {
        $websiteEntity = (new WebsiteEntity\Website)
            ->setGoogleTagManagerId('GoogleTagManagerId')
            ;

        $this->assertIsString(
            $this->headHtmlHelper->__invoke($websiteEntity)
        );
    }
}
