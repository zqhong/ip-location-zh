<?php

namespace Zhuzhichao\IpLocationZh;

/**
 * @package Zhuzhichao\IpLocationZh
 */
class IpInfo
{
    const ISP_CHINA_NET = '中国电信';
    const ISP_CMCC = '中国移动';
    const ISP_UNICOM = '中国联通';
    const ISP_TIE_TONG = '中国铁通';
    const ISP_CERNET = '教育网';
    const ISP_CSTNET = '科技网';
    const ISP_DRPENG = '鹏博士';

    const ISP_GWBN = '长城';
    const ISP_JUYOU = '聚友';

    const ISP_ALIYUN = '阿里云';
    const ISP_QCLOUD = '腾讯云';

    const ISP_UNKNOWN = '未知';

    /**
     * @var string 国家名称
     */
    protected $country;

    /**
     * @var string 省份名称
     */
    protected $province;

    /**
     * @var string 城市名称
     */
    protected $city;

    /**
     * @var string 邮政编码
     */
    protected $zipCode;

    /**
     * @var string 运营商名称
     */
    protected $isp;

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getIsp()
    {
        return $this->isp;
    }

    /**
     * @param string $isp
     */
    public function setIsp($isp)
    {
        $this->isp = $isp;
    }

}