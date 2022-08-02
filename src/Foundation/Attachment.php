<?php

declare(strict_types=1);

namespace Esp\Foundation;

class Attachment
{
    /**
     * 附件创建
     *
     * @param string $fileName 需上传文件的名称
     * @param int $fileType 上传类型：
     *
     * 1：合同附件
     * 2：合同补充附件
     * 3：监测任务其他附件
     * 4：监测任务点位分布示意图
     * 5：监测任务方案附件
     * 6：监测任务采样补充说明文件
     * 7：监测任务检测报告
     * 8：监测任务数据报告（退回上阶段）
     * 9：监测任务采样图片
     *
     * <ResultStruct>
     * <succes>True</succes>
     * <message>201910201443298142.pdf</message>
     * </ResultStruct>
     *
     * succes 执行结果：True 成功 False 失败
     * message 失败描述/成功返回接口生成文件名称
     *
     * @return void
     */
    public function CreateFile(string $fileName, int $fileType)
    {

    }

    /**
     * 附件断点上传
     *
     * @param string $fileNameNew 附件创建接口成功返回文件名称
     * @param int $fileType 上传类型：
     * 1：合同附件
     * 2：合同补充附件
     * 3：监测任务其他附件
     * 4：监测任务点位分布示意图
     * 5：监测任务方案附件
     * 6：监测任务采样补充说明文件
     * 7：监测任务检测报告
     * 8：监测任务数据报告（退回上阶段）
     * 9：监测任务采样图片
     * @param $buffer 文件流（byte[]）或 base64
     *
     * <ResultStruct>
     * <succes>True</succes>
     * <message>成功！</message>
     * </ResultStruct>
     *
     * succes 执行结果：True 成功 False 失败
     * message 描述
     *
     * @return void
     */
    public function AppendFile(string $fileNameNew, int $fileType, $buffer)
    {

    }

    /**
     * 附件校验
     *
     * @param string $fileNameNew 附件创建接口成功返回文件名称
     * @param int $fileType 上传类型：
     * 1：合同附件
     * 2：合同补充附件
     * 3：监测任务其他附件
     * 4：监测任务点位分布示意图
     * 5：监测任务方案附件
     * 6：监测任务采样补充说明文件
     * 7：监测任务检测报告
     * 8：监测任务数据报告（退回上阶段）
     * 9：监测任务采样图片
     * @param string $md5 文件流加密成32位Hash值 C#代码范例：
     * string md5Str = "";
     * FileStream fs = new FileStream(fileName, FileMode.Open,
     * FileAccess.ReadWrite, FileShare.ReadWrite);
     * MD5CryptoServiceProvider p = new MD5CryptoServiceProvider();
     * byte[] md5buffer = p.ComputeHash(fs);
     * fs.Close();
     * for (int i = 0; i < md5buffer.Length; i++)
     * {
     * md5Str += md5buffer[i].ToString("x2");
     * }
     * return md5Str;
     *
     * <ResultStruct>
     * <succes>True</succes>
     * <message>上传成功！</message>
     * </ResultStruct>
     *
     * succes 执行结果：True 成功 False 失败
     * message 描述
     *
     * @return void
     */
    public function VerifyFile(string $fileNameNew, int $fileType, string $md5)
    {

    }
}
