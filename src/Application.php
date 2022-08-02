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
     * 接口地址
     * @var array
     */
    public static array $webService = [
        'dev' => 'http://218.242.55.138:10077/WebService1/WebService.asmx',
        'prod' => 'http://218.242.55.138:10001/WebService1/WebService.asmx',
    ];

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
     */
    public function __construct(string $username, string $password)
    {
        $this->username = trim($username);
        $this->password = trim($password);
    }

    /**
     * 委托方
     * @return EntrustingParty
     */
    public function entrustingParty(): EntrustingParty
    {
        return new EntrustingParty($this->auth());
    }

    /**
     * 行政区域
     * @return Region
     */
    public function region(): Region
    {
        return new Region($this->auth());
    }

    /**
     * 人员信息
     * @return Worker
     */
    public function worker(): Worker
    {
        return new Worker($this->auth());
    }

    /**
     * 设备信息
     * @return Device
     */
    public function device(): Device
    {
        return new Device($this->auth());
    }

    /**
     * 监测任务类型
     * @return MonitoringTaskType
     */
    public function monitoringTaskType(): MonitoringTaskType
    {
        return new MonitoringTaskType($this->auth());
    }

    /**
     * 分析方法
     * @return MonitoringAnalysisMethod
     */
    public function monitoringAnalysisMethod(): MonitoringAnalysisMethod
    {
        return new MonitoringAnalysisMethod($this->auth());
    }

    /**
     * 采样方法
     * @return MonitoringSamplingMethod
     */
    public function monitoringSamplingMethod(): MonitoringSamplingMethod
    {
        return new MonitoringSamplingMethod($this->auth());
    }

    /**
     * 监测任务
     * @return MonitoringTask
     */
    public function monitoringTask(): MonitoringTask
    {
        return new MonitoringTask($this->auth());
    }

    /**
     * 运维任务类型
     * @return OpenationTaskType
     */
    public function openationTaskType(): OpenationTaskType
    {
        return new OpenationTaskType($this->auth());
    }

    /**
     * 运维点位
     * @return OperationScheme
     */
    public function operationScheme(): OperationScheme
    {
        return new OperationScheme($this->auth());
    }

    /**
     * 运维内容
     * @return OperationDetail
     */
    public function operationDetail(): OperationDetail
    {
        return new OperationDetail($this->auth());
    }

    /**
     * 附件
     * @return Attachment
     */
    public function attachment(): Attachment
    {
        return new Attachment($this->auth());
    }

    /**
     * 合同
     * @return Contract
     */
    public function contract(): Contract
    {
        return new Contract($this->auth());
    }


    /**
     * @return array
     */
    private function auth(): array
    {
        return [
            'username' => $this->username,
            'password' => $this->password,
        ];
    }
}
