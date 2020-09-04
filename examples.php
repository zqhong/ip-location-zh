<?php

use Zhuzhichao\IpLocationZh\Ip;

require __DIR__ . '/vendor/autoload.php';

$ipInfo = Ip::findV2("47.96.140.2");

printf("%s %s %s（%s）",
    $ipInfo->getCountry(),
    $ipInfo->getProvince(),
    $ipInfo->getCity(),
    $ipInfo->getIsp()
);