<?php

declare(strict_types=1);

namespace Esp\Foundation;

use Esp\Kernel\Provider;
use Esp\Support\XML;
use Exception;

/**
 * Class Region
 * @package Esp\Foundation
 */
class Region extends Provider
{
    /**
     * 行政区域字典
     * @return array
     * @throws Exception
     */
    public function Z_CityInfo(): array
    {
        $response = $this->soap->Z_CityInfo();
        $data = XML::parse($response->Z_CityInfoResult->any);
        if (isset($data['succes']) && $data['succes'] === 'False') {
            throw new Exception($data['message']);
        }
        return $data['Item'];
    }
}
