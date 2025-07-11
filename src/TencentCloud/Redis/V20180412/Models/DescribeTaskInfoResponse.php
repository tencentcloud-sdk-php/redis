<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskInfo返回参数结构体
 *
 * @method string getStatus() 获取任务状态。
- preparing：待执行。
- running：执行中。
- succeed：成功。
- failed：失败。
- error：执行出错。
 * @method void setStatus(string $Status) 设置任务状态。
- preparing：待执行。
- running：执行中。
- succeed：成功。
- failed：失败。
- error：执行出错。
 * @method string getStartTime() 获取任务开始时间。
 * @method void setStartTime(string $StartTime) 设置任务开始时间。
 * @method string getTaskType() 获取任务类型。常见的类型包含：新建类型、配置变更、关闭实例、清空实例、重置密码、版本升级、备份实例、改变网络类型、实例可用区迁移、手动提主等。
 * @method void setTaskType(string $TaskType) 设置任务类型。常见的类型包含：新建类型、配置变更、关闭实例、清空实例、重置密码、版本升级、备份实例、改变网络类型、实例可用区迁移、手动提主等。
 * @method string getInstanceId() 获取实例的 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例的 ID。
 * @method string getTaskMessage() 获取任务执行返回的信息，执行错误时显示错误信息。执行中或执行成功则为空。
 * @method void setTaskMessage(string $TaskMessage) 设置任务执行返回的信息，执行错误时显示错误信息。执行中或执行成功则为空。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskInfoResponse extends AbstractModel
{
    /**
     * @var string 任务状态。
- preparing：待执行。
- running：执行中。
- succeed：成功。
- failed：失败。
- error：执行出错。
     */
    public $Status;

    /**
     * @var string 任务开始时间。
     */
    public $StartTime;

    /**
     * @var string 任务类型。常见的类型包含：新建类型、配置变更、关闭实例、清空实例、重置密码、版本升级、备份实例、改变网络类型、实例可用区迁移、手动提主等。
     */
    public $TaskType;

    /**
     * @var string 实例的 ID。
     */
    public $InstanceId;

    /**
     * @var string 任务执行返回的信息，执行错误时显示错误信息。执行中或执行成功则为空。
     */
    public $TaskMessage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务状态。
- preparing：待执行。
- running：执行中。
- succeed：成功。
- failed：失败。
- error：执行出错。
     * @param string $StartTime 任务开始时间。
     * @param string $TaskType 任务类型。常见的类型包含：新建类型、配置变更、关闭实例、清空实例、重置密码、版本升级、备份实例、改变网络类型、实例可用区迁移、手动提主等。
     * @param string $InstanceId 实例的 ID。
     * @param string $TaskMessage 任务执行返回的信息，执行错误时显示错误信息。执行中或执行成功则为空。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskMessage",$param) and $param["TaskMessage"] !== null) {
            $this->TaskMessage = $param["TaskMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
