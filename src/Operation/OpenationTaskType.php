<?php

declare(strict_types=1);

namespace Esp\Operation;

use Esp\Kernel\Provider;

/**
 * Class OpenationTaskType
 * @package Esp\Operation
 */
class OpenationTaskType extends Provider
{
    /**
     * 运维任务类别
     *
     * <Items>
     * <Item>
     * <ID>100000</ID>
     * <NAME>空气质量自动监测运维</NAME>
     * </Item>
     * <Item>
     * <ID>100001</ID>
     * <NAME>水环境自动监测运维</NAME>
     * </Item>
     *
     * ID 类别 ID
     * NAME 类别名称
     *
     * @return void
     */
    public function M_OpenationTaskType()
    {

    }
}
