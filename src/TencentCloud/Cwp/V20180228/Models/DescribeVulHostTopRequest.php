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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulHostTop请求参数结构体
 *
 * @method integer getTop() 获取获取top值，1-100
 * @method void setTop(integer $Top) 设置获取top值，1-100
 * @method integer getVulCategory() 获取1: web应用漏洞 2=系统组件漏洞3:安全基线 4: Linux系统漏洞 5: windows补丁 6:应急漏洞
 * @method void setVulCategory(integer $VulCategory) 设置1: web应用漏洞 2=系统组件漏洞3:安全基线 4: Linux系统漏洞 5: windows补丁 6:应急漏洞
 */
class DescribeVulHostTopRequest extends AbstractModel
{
    /**
     * @var integer 获取top值，1-100
     */
    public $Top;

    /**
     * @var integer 1: web应用漏洞 2=系统组件漏洞3:安全基线 4: Linux系统漏洞 5: windows补丁 6:应急漏洞
     */
    public $VulCategory;

    /**
     * @param integer $Top 获取top值，1-100
     * @param integer $VulCategory 1: web应用漏洞 2=系统组件漏洞3:安全基线 4: Linux系统漏洞 5: windows补丁 6:应急漏洞
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
        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }
    }
}
