<?php

namespace Foundation;

use Esp\Application;
use PHPUnit\Framework\TestCase;

class RegionTest extends TestCase
{

    public function testZ_CityInfo()
    {
        $application = new Application('sar20180', 'sar77');
        $z_CityInfo = $application->region()->Z_CityInfo();
        $this->assertIsArray($z_CityInfo, 'ok');
    }
}
