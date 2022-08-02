<?php

namespace Foundation;

use Esp\Application;
use PHPUnit\Framework\TestCase;

class RegionTest extends TestCase
{

    public function testZ_CityInfo()
    {
        $app = new Application('', '');
        $data = $app->Z_CityInfo();
        $this->assertIsArray($data, 'ok');
    }
}
