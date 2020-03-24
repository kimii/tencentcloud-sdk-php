<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP）
 * @method string getId() 获取资源实例ID
 * @method void setId(string $Id) 设置资源实例ID
 */

/**
 *DescribeBGPIPL7RuleMaxCnt请求参数结构体
 */
class DescribeBGPIPL7RuleMaxCntRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP）
     */
    public $Business;

    /**
     * @var string 资源实例ID
     */
    public $Id;
    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP）
     * @param string $Id 资源实例ID
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
