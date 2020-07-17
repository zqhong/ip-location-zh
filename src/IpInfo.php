<?php

namespace Zhuzhichao\IpLocationZh;

/**
 * @package Zhuzhichao\IpLocationZh
 */
class IpInfo
{
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
    protected $icp;

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
    public function getIcp()
    {
        return $this->icp;
    }

    /**
     * @param string $icp
     */
    public function setIcp($icp)
    {
        $this->icp = $icp;
    }

}