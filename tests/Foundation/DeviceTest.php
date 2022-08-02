<?php

namespace Foundation;

use Esp\Application;
use PHPUnit\Framework\TestCase;

class DeviceTest extends TestCase
{

    public function testB_GetALLDevicesList()
    {
        $app = new Application('', '');
        $data = $app->B_GetALLDevicesList();
        $this->assertIsArray($data, 'ok');
    }
}
