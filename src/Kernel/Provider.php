<?php

declare(strict_types=1);

namespace Esp\Kernel;

use SoapClient;

/**
 * Class Provider
 * @package Esp\Kernel
 */
class Provider
{
    /**
     * @var SoapClient
     */
    protected SoapClient $soap;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->soap = (new Soap())->client($config);
    }
}
