<?php

require __DIR__.'/../vendor/autoload.php';

use Zhuzhichao\IpLocationZh\Ip;
use PHPUnit\Framework\TestCase;
use Zhuzhichao\IpLocationZh\IpInfo;

class TestIp extends TestCase
{
    public function testFindV2Isp()
    {
        // 电信
        $ipInfo = Ip::findV2("171.12.10.156");
        $this->assertEquals("电信", $ipInfo->getIsp());
        unset($ipInfo);

        $ipInfo = Ip::findV2("171.12.10.156");
        $this->assertEquals("电信", $ipInfo->getIsp());
        unset($ipInfo);

        // 移动
        $ipInfo = Ip::findV2("223.73.123.41");
        $this->assertEquals("移动", $ipInfo->getIsp());
        unset($ipInfo);

        // 联通
        $ipInfo = Ip::findV2("103.3.152.11");
        $this->assertEquals("联通", $ipInfo->getIsp());
        unset($ipInfo);

        // 铁通
        $ipInfo = Ip::findV2("120.90.0.41");
        $this->assertEquals("铁通", $ipInfo->getIsp());
        unset($ipInfo);

        // 教育网/南方医科大学
        $ipInfo = Ip::findV2("202.192.0.46");
        $this->assertEquals("南方医科大学", $ipInfo->getIsp());
        unset($ipInfo);

        // 科技网/中国科学院
        $ipInfo = Ip::findV2("210.73.0.11");
        $this->assertEquals("中国科学院", $ipInfo->getIsp());
        unset($ipInfo);

        // 鹏博士
        $ipInfo = Ip::findV2("175.189.1.66");
        $this->assertEquals("鹏博士宽带", $ipInfo->getIsp());
        unset($ipInfo);

        // 阿里云
        $ipInfo = Ip::findV2("47.96.140.2");
        $this->assertEquals("阿里云", $ipInfo->getIsp());
        unset($ipInfo);

        // 腾讯云
        $ipInfo = Ip::findV2("139.199.11.12");
        $this->assertEquals("腾讯云", $ipInfo->getIsp());
        unset($ipInfo);
    }

    public function testFindV2()
    {
        $ipInfo = Ip::findV2("171.12.10.156");
        $this->assertEquals("中国", $ipInfo->getCountry());
        $this->assertEquals("河南", $ipInfo->getProvince());
        $this->assertEquals("郑州", $ipInfo->getCity());
        $this->assertEquals("410100", $ipInfo->getZipCode());

        $ipInfo = Ip::findV2("127.0.0.1");
        $this->assertEquals("本机地址", $ipInfo->getCountry());
        $this->assertEquals("本机地址", $ipInfo->getProvince());
        $this->assertEquals("", $ipInfo->getCity());
        $this->assertEquals("", $ipInfo->getZipCode());
    }

    public function testIpLocation()
    {
        $this->assertEquals(['中国', '河南', '郑州', '', '410100'], Ip::find('171.12.10.156'));
        $this->assertEquals(['中国', '山东', '', '', '370000'], Ip::find('110.223.0.43'));
        $this->assertEquals(['本机地址', '本机地址', '', '', ''], Ip::find('127.0.0.1'));
        $this->assertEquals(['中国', '浙江', '杭州', '', '330100'], Ip::find('110.75.115.70'));
    }

    public function testIpLocations()
    {
        $locations = Ip::locations();
        $this->assertArrayHasKey('北京', $locations);
        $this->assertArrayHasKey('河北', $locations);
        $this->assertGreaterThan(0, count($locations['河北']['cities']));
    }
}
