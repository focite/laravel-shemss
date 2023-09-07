<?php

declare(strict_types=1);

namespace Focite\Shemss\Customer;

use Focite\Shemss\Kernel\Provider;
use Focite\Shemss\Support\XML;
use Exception;

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
