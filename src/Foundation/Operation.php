<?php

declare(strict_types=1);

namespace Esp\Foundation;

class Operation
{
    /**
     * 运维点位列表
     *
     * <Items>
     * <Item>
     * <ID>100000</ID>
     * <OTID>100000</OTID>
     * <MC>宝庆路站</MC>
     * <CODE>9001</CODE>
     * <ADDRESS>上海/俆汇区</ADDRESS>
     * <LATITUDE>31.19240</LATITUDE>
     * <LONGITUDE>121.42700</LONGITUDE>
     * </Item>
     * </Items>
     *
     * ID 点位 ID
     * OTID 任务类别 ID
     * MC 点位名称
     * CODE 测试代码
     * ADDRESS 地址
     * LATITUDE 维度
     * LONGITUDE 经度
     *
     * @return void
     */
    public function scheme()
    {

    }

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
     * @return void
     */
    public function detail()
    {

    }
}
