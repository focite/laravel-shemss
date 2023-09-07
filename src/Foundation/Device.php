<?php

declare(strict_types=1);

namespace Focite\Shemss\Foundation;

use Focite\Shemss\Kernel\Provider;
use Focite\Shemss\Support\XML;
use Exception;

class Device extends Provider
{
    /**
     * 设备信息列表
     * @return array
     * @throws Exception
     */
    public function B_GetALLDevicesList(): array
    {
        $response = $this->soap->B_GetALLDevicesList();
        $data = XML::parse($response->B_GetALLDevicesListResult->any);
        if (isset($data['succes']) && $data['succes'] === 'False') {
            throw new Exception($data['message']);
        }
        return $data['Item'];
    }
}
