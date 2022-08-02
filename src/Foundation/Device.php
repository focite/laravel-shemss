<?php

declare(strict_types=1);

namespace Esp\Foundation;

class Device
{
    /**
     * 设备信息列表
     *
     * <Items>
     * <Item>
     * <ID>400484</ID>
     * <SBBH>SB001</SBBH>
     * <SBMC>采样设备 01</SBMC>
     * <CCBH>001</CCBH>
     * <SBCQ></SBCQ>
     * <XH_GE>1</XH_GE>
     * <SBMS>采样设备 01</SBMS>
     * </Item>
     * </Items>
     *
     * ID 设备 ID
     * SBBH 资产编号
     * SBMC 设备名称
     * CCBH 出厂编号
     * SBCQ 设备产权
     * XH_GE 型号/规格
     * SBMS 设备描述
     *
     * @return void
     */
    public function B_GetALLDevicesList()
    {

    }
}
