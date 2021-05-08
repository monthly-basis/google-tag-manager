<?php
namespace MonthlyBasis\GoogleTagManagerTest;

use MonthlyBasis\GoogleTagManager\View\Helper as GoogleTagManagerHelper;
use MonthlyBasis\LaminasTest\ModuleTestCase;
use MonthlyBasis\Website\Model\Entity as WebsiteEntity;
use PHPUnit\Framework\TestCase;

class BodyHtmlTestTest extends TestCase
{
    protected function setUp(): void
    {
        $this->bodyHtmlHelper = new GoogleTagManagerHelper\BodyHtml();
    }

    public function test___invoke()
    {
        $websiteEntity = (new WebsiteEntity\Website)
            ->setGoogleTagManagerId('GoogleTagManagerId')
            ;

        $this->assertIsString(
            $this->bodyHtmlHelper->__invoke($websiteEntity)
        );
    }
}
