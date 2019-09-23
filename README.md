# baiduapi
===

## 百度身份识别


## 安装

### Composer

baiduapi采用composer进行安装，要使用baiduapi功能，只需要在composer.json中添加如下依赖：

```json
{
  "require": {
    "juchengit/baiduapi": "1.*"
  }
}
```


### 手动

1. 手动下载或clone最新版本baiduapi代码
2. 把alipay放入项目目录
3. `require` baiduapi src目录下面的BaiduDiscern.php，即可使用，如把baiduapi放在当前目录下，只需要:

```php
require __DIR__ . "/alipay/src/BaiduDiscern.php";
```

## 用法

- **准备必要参数**

```php
//AppID
$appId = 1400009099; 

// API Key
$apiKey = "API Key";

//Secret Key
$secretKey="Secret Key";
```

- **身份证识别**
```php
    
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     *   detect_direction 是否检测图像朝向，默认不检测，即：false。朝向是指输入图像是正常方向、逆时针旋转90/180/270度。可选值包括:<br>- true：检测朝向；<br>- false：不检测朝向。
     *   detect_risk 是否开启身份证风险类型(身份证复印件、临时身份证、身份证翻拍、修改过的身份证)功能，默认不开启，即：false。可选值:true-开启；false-不开启
     * @return array

//图片路径 支持绝对路径和 网址
$pic_url="";
//$idCardSide - front：身份证含照片的一面；back：身份证带国徽的一面  默认：front 不必填
//$options列表:  //数组包含以下参数 不必填
     *   detect_direction 是否检测图像朝向，默认不检测，即：false。朝向是指输入图像是正常方向、逆时针旋转90/180/270度。可选值包括:<br>- true：检测朝向；<br>- false：不检测朝向。
     *   detect_risk 是否开启身份证风险类型(身份证复印件、临时身份证、身份证翻拍、修改过的身份证)功能，默认不开启，即：false。可选值:true-开启；false-不开启
     

$baidu= new baiduapi\BaiduDiscern($appId,$apiKey,$secretKey);
$baidu->idCardDiscern(file_get_contents($pic_url),$idCardSide,$options);
```

> `Note` 百度支持多种参数如需要请看 百度官方文档 https://cloud.baidu.com/doc/OCR/s/Fjwvxzs7d
> `Note` 错误信息请查看百度官方文档错误码   https://cloud.baidu.com/doc/ANTIPORN/s/tjwvyp6qr/
