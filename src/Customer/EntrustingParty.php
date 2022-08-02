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
     *
     * <Items>
     * <Item>
     * <ID>100059</ID>
     * <XYDM>1001194909006811519</XYDM>
     * <YYZZBH>1001194909006811519</YYZZBH>
     * <QYMC>上海炯测环保技术有限公司</QYMC>
     * <FRDB>朱顺华</FRDB>
     * </Item>
     * <Item>
     * <ID>100060</ID>
     * <XYDM>91610131333732656E</XYDM>
     *
     * ID 委托方 ID
     * XYDM 统一信用代码
     * YYZZBH 营业执照编号
     * QYMC 企业名称
     * FRDB 法人
     * @return array
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
