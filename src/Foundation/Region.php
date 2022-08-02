<?php

declare(strict_types=1);

namespace Esp\Foundation;

use Esp\Kernel\Soap;
use Esp\Support\XML;
use Exception;

/**
 * Class Region
 * @package Esp\Foundation
 */
class Region
{
    /**
     * @var array
     */
    private array $config;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * 行政区域字典
     * @return array
     * @throws Exception
     */
    public function Z_CityInfo(): array
    {
        $z_CityInfo = (new Soap())->client($this->config)->Z_CityInfo();
        $response = XML::parse($z_CityInfo->Z_CityInfoResult->any);
        if (isset($response['succes']) && $response['succes'] === 'False') {
            throw new Exception($response['message']);
        }
        return $response['Item'];
    }
}
