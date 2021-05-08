<?php
namespace MonthlyBasis\GoogleTagManagerTest;

use MonthlyBasis\GoogleTagManager\Module;
use MonthlyBasis\LaminasTest\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
