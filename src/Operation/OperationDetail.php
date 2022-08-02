<?php

declare(strict_types=1);

namespace Esp\Operation;

use Esp\Kernel\Provider;
use Exception;

/**
 * Class OperationDetail
 * @package Esp\Operation
 */
class OperationDetail extends Provider
{

    /**
     * 运维内容列表
     *
     * <Item>
     * <ID>100036</ID>
     * <OTID>100002</OTID>
     * <DETAILNAME>全系统校准</DETAILNAME>
     * <CYCLE>每两月</CYCLE>
     * </Item>
     *
     * ID 点位 ID
     * OTID 任务类别 ID
     * CYCLE 周期类型
     * DETAILNAME 运维内容
     *
     * @return array
     * @throws Exception
     */
    public function M_GetOperationDetailList()
    {

    }
}
