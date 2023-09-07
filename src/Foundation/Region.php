<?php

declare(strict_types=1);

namespace Focite\Shemss\Foundation;

use Focite\Shemss\Kernel\Provider;
use Focite\Shemss\Support\XML;
use Exception;

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
