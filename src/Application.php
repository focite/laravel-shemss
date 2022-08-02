<?php

declare(strict_types=1);

namespace Esp;

use Esp\Contract\Contract;
use Esp\Customer\EntrustingParty;
use Esp\Foundation\Attachment;
use Esp\Foundation\Device;
use Esp\Foundation\Region;
use Esp\Foundation\Worker;
use Esp\Monitoring\MonitoringAnalysisMethod;
use Esp\Monitoring\MonitoringSamplingMethod;
use Esp\Monitoring\MonitoringTask;
use Esp\Monitoring\MonitoringTaskType;
use Esp\Operation\OpenationTaskType;
use Esp\Operation\OperationDetail;
use Esp\Operation\OperationScheme;

class Application
{
    /**
     * @var bool 调试模式
     */
    private bool $debug;

    /**
     * @var string 用户名
     */
    private string $username;

    /**
     * @var string 用户名
     */
    private string $password;

    /**
     * @param string $username 用户名
     * @param string $password 密码
     * @param bool $debug 调试模式
     */
    public function __construct(string $username, string $password, bool $debug = true)
    {
        $this->debug = $debug;
        $this->username = trim($username);
        $this->password = trim($password);
    }

    /**
     * 委托方
     * @return EntrustingParty
     */
    public function entrustingParty(): EntrustingParty
    {
        return new EntrustingParty($this->config());
    }

    /**
     * 行政区域
     * @return Region
     */
    public function region(): Region
    {
        return new Region($this->config());
    }

    /**
     * 人员信息
     * @return Worker
     */
    public function worker(): Worker
    {
        return new Worker($this->config());
    }

    /**
     * 设备信息
     * @return Device
     */
    public function device(): Device
    {
        return new Device($this->config());
    }

    /**
     * 监测任务类型
     * @return MonitoringTaskType
     */
    public function monitoringTaskType(): MonitoringTaskType
    {
        return new MonitoringTaskType($this->config());
    }

    /**
     * 分析方法
     * @return MonitoringAnalysisMethod
     */
    public function monitoringAnalysisMethod(): MonitoringAnalysisMethod
    {
        return new MonitoringAnalysisMethod($this->config());
    }

    /**
     * 采样方法
     * @return MonitoringSamplingMethod
     */
    public function monitoringSamplingMethod(): MonitoringSamplingMethod
    {
        return new MonitoringSamplingMethod($this->config());
    }

    /**
     * 监测任务
     * @return MonitoringTask
     */
    public function monitoringTask(): MonitoringTask
    {
        return new MonitoringTask($this->config());
    }

    /**
     * 运维任务类型
     * @return OpenationTaskType
     */
    public function openationTaskType(): OpenationTaskType
    {
        return new OpenationTaskType($this->config());
    }

    /**
     * 运维点位
     * @return OperationScheme
     */
    public function operationScheme(): OperationScheme
    {
        return new OperationScheme($this->config());
    }

    /**
     * 运维内容
     * @return OperationDetail
     */
    public function operationDetail(): OperationDetail
    {
        return new OperationDetail($this->config());
    }

    /**
     * 附件
     * @return Attachment
     */
    public function attachment(): Attachment
    {
        return new Attachment($this->config());
    }

    /**
     * 合同
     * @return Contract
     */
    public function contract(): Contract
    {
        return new Contract($this->config());
    }


    /**
     * @return array
     */
    private function config(): array
    {
        return [
            'env' => $this->debug ? 'dev' : 'prod',
            'auth' => [
                'UserName' => $this->username,
                'PassWord' => $this->password,
            ]
        ];
    }
}
