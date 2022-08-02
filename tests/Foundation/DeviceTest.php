<?php

namespace Foundation;

use Esp\Application;
use PHPUnit\Framework\TestCase;

class DeviceTest extends TestCase
{

    public function testB_GetALLDevicesList()
    {
        $application = new Application('', '');
        $data = $application->device()->B_GetALLDevicesList();
        $this->assertIsArray($data, 'ok');
    }
}
