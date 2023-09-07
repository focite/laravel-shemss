<?php

declare(strict_types=1);

namespace Focite\Shemss\Foundation;

use Focite\Shemss\Kernel\Provider;
use Focite\Shemss\Support\XML;
use Exception;

class Worker extends Provider
{
    /**
     * 人员信息列表
     * @return array
     * @throws Exception
     */
    public function B_GetALLWorkersList(): array
    {
        $response = $this->soap->B_GetALLWorkersList();
        $data = XML::parse($response->B_GetALLWorkersListResult->any);
        if (isset($data['succes']) && $data['succes'] === 'False') {
            throw new Exception($data['message']);
        }
        return $data['Item'];
    }
}
