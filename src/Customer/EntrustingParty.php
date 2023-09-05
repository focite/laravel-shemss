<?php

declare(strict_types=1);

namespace Esp\Customer;

use Esp\Kernel\Provider;
use Esp\Support\XML;
use Exception;

/**
 * Class EntrustingParty
 * @package Esp\Customer
 */
class EntrustingParty extends Provider
{
    /**
     * 委托方列表
     * @return array
     * @throws Exception
     */
    public function C_PartyABasicDataList(): array
    {
        $response = $this->soap->C_PartyABasicDataList();
        $data = XML::parse($response->C_PartyABasicDataListResult->any);
        if (isset($data['succes']) && $data['succes'] === 'False') {
            throw new Exception($data['message']);
        }
        return $data['Item'];
    }
}
