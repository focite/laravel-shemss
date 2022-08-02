<?php

declare(strict_types=1);

namespace Esp\Contract;

use Esp\Kernel\Provider;
use Exception;

/**
 * Class Contract
 * @package Esp\Contract
 */
class Contract extends Provider
{
    /**
     * 合同基本信息（添加/新增）
     * @return array
     * @throws Exception
     */
    public function C_InsertContractInfo()
    {

    }

    /**
     * 合同补充说明附件（添加）
     * @return array
     * @throws Exception
     */
    public function C_InsertContractSupply()
    {

    }

    /**
     * 合同补充说明附件（删除）
     * @return array
     * @throws Exception
     */
    public function C_DeleteContractSupply()
    {

    }

    /**
     * 合同基本信息列表
     * @return array
     * @throws Exception
     */
    public function C_GetALLContractList()
    {

    }
}
