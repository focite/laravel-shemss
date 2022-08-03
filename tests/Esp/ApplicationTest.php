<?php

namespace Esp;

use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    private Application $app;

    /**
     * @before
     */
    public function init()
    {
        $this->app = new Application('sar20180918', '');
    }

    public function testM_GetOperationSchemeList()
    {
        $this->assertIsBool(0);
    }

    public function testM_UpdatePlanTime()
    {
        $this->assertIsBool(0);
    }

    public function testM_SubmitSamp()
    {
        $this->assertIsBool(0);
    }

    public function testM_SubmitOperationTask()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertMonitoringTask()
    {
        $this->assertIsBool(0);
    }

    public function testC_DeleteContractInfo()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetOperationTaskByID()
    {
        $this->assertIsBool(0);
    }

    public function testM_DelPlan()
    {
        $this->assertIsBool(0);
    }

    public function testB_GetALLWorkersList()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertMonitorTaskFile()
    {
        $this->assertIsBool(0);
    }

    /**
     * @throws \Exception
     */
    public function testB_GetALLDevicesList()
    {
        $data = $this->app->B_GetALLDevicesList();
        $this->assertIsArray($data, 'ok');
    }

    public function testC_InsertContractInfo()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetOperationDetailList()
    {
        $this->assertIsBool(0);
    }

    public function testM_EditPlanXML()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTaskDevicesXML()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertSampSupply()
    {
        $this->assertIsBool(0);
    }

    public function testM_UpdatePlanTimeXML()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTaskPlanLog()
    {
        $this->assertIsBool(0);
    }

    public function testM_AddOperationTaskReport()
    {
        $this->assertIsBool(0);
    }

    public function testC_GetALLContractList()
    {
        $data = $this->app->C_GetALLContractList();
        $this->assertIsArray($data, 'ok');
    }

    public function testM_InsertOperationTaskPlan()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTaskPlanXML()
    {
        $this->assertIsBool(0);
    }

    public function testM_AddUReport()
    {
        $this->assertIsBool(0);
    }

    public function testM_OpenationTaskType()
    {
        $this->assertIsBool(0);
    }

    public function testM_EditScheme()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetALLOperationTask()
    {
        $this->assertIsBool(0);
    }

    public function testC_DeleteContractSupply()
    {
        $this->assertIsBool(0);
    }

    public function testCreateFile()
    {
        $data = $this->app->CreateFile('aasdagag.pdf', 1);
        $this->assertStringContainsString('pdf', $data);
    }

    public function testM_DelUReport()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertPlanLogXML()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertPlanLog()
    {
        $this->assertIsBool(0);
    }

    public function testM_EndAnalysis()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetDoneMonitorTask()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetReportNum()
    {
        $this->assertIsBool(0);
    }

    public function testAppendFile()
    {
        $this->assertIsBool(0);
    }

    public function testC_InsertContractSupply()
    {
        $this->assertIsBool(0);
    }

    public function testM_MonitoringTaskType()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetOperationTaskPlanList()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTask()
    {
        $this->assertIsBool(0);
    }

    public function testM_OperationTaskAbortEnd()
    {
        $this->assertIsBool(0);
    }

    /**
     * @throws \Exception
     */
    public function testZ_CityInfo()
    {
        $data = $this->app->Z_CityInfo();
        $this->assertIsArray($data, 'ok');
    }

    public function testM_SubmitPlan()
    {
        $this->assertIsBool(0);
    }

    public function testM_OperationTaskEnd()
    {
        $this->assertIsBool(0);
    }

    public function testM_Back()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetMonitorTaskByRWBH()
    {
        $this->assertIsBool(0);
    }

    public function testM_AddDeivces()
    {
        $this->assertIsBool(0);
    }

    public function testM_EditPlan()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetReportApply()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTaskWorkers()
    {
        $this->assertIsBool(0);
    }

    public function testM_EndSamp()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetMonitorTaskSchemeByMTID()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertMonitorTaskPlanXML()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetOperationTaskDone()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTaskDevices()
    {
        $this->assertIsBool(0);
    }

    public function testM_AddWorkers()
    {
        $this->assertIsBool(0);
    }

    public function testM_SubmitSchedule()
    {
        $this->assertIsBool(0);
    }

    public function testM_MonitoringAnalysisMethod()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetALLMonitorTask()
    {
        $this->assertIsBool(0);
    }

    public function testM_DelScheme()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTaskSchemeXML()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTaskScheme()
    {
        $this->assertIsBool(0);
    }

    /**
     * @throws \Exception
     */
    public function testC_PartyABasicDataList()
    {
        $data = $this->app->C_PartyABasicDataList();
        $this->assertIsArray($data);
    }

    public function testM_DelOperationTaskReport()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetPlanList()
    {
        $this->assertIsBool(0);
    }

    public function testM_MonitoringSamplingMethod()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertMonitorTaskPlan()
    {
        $this->assertIsBool(0);
    }

    public function testM_InsertOperationTaskWorkersXML()
    {
        $this->assertIsBool(0);
    }

    public function testM_GetUReportList()
    {
        $this->assertIsBool(0);
    }

    public function testVerifyFile()
    {
        $this->assertIsBool(0);
    }
}
