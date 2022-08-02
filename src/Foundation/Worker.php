<?php

declare(strict_types=1);

namespace Esp\Foundation;

use Esp\Kernel\Provider;
use Esp\Support\XML;
use Exception;

class Worker extends Provider
{
    /**
     * 人员信息列表
     *
     * <Item>
     * <ID>119129</ID>
     * <XM>方兴建</XM>
     * <XB>男</XB>
     * <NL> </NL>
     * <ZW>技术管理</ZW>
     * <XL>本科</XL>
     * <IS_ZYJSRY>否</IS_ZYJSRY>
     * <ZYJSRYZC> </ZYJSRYZC>
     * <SXZY> </SXZY>
     * <ZW_OTHER>技术管理</ZW_OTHER>
     * </Item>
     *
     * ID 人员 ID
     * XM 姓名
     * XB 性别
     * NL 年龄
     * ZW 岗位
     * XL 学历
     * IS_ZYJSRY 是否专业技术人员
     * ZYJSRYZC 专业技术人员职称（同等能力）
     * SXZY 所学专业
     * ZW_OTHER 岗位：其他名称
     *
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
