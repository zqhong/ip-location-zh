# Ip Location Zh

数据最后更新时间为 2019-7-3, 更新时间:不定期。 数据源于: https://www.ipip.net/product/client.html

## 安装

```bash
composer require -vvv zqhong/ip-location-zh
```

## 使用

```php
use Zhuzhichao\IpLocationZh\Ip;

$ipInfo = Ip::findV2("47.96.140.2");

printf("%s%s%s（%s）",
    $ipInfo->getCountry(),
    $ipInfo->getProvince(),
    $ipInfo->getCity(),
    $ipInfo->getIsp()
);

// 返回结果：中国 浙江 杭州（阿里云）
// 具体代码请参考：examples.php
```

## 与原仓库的区别

1. 添加 findV2 方法，返回 IpInfo 对象，提供更方便使用的结果
2. 添加运营商（ISP）数据

## License

MIT

