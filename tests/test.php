<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/23
 * Time: 10:34
 */

require 'vendor/autoload.php';
$a= new baiduapi\BaiduDiscern(17288203,"60LQDy5n57DQzpoiTN5C83pB","bYriGyOd3t3TSYn9GsOhHhQDVzP6pX7m");
$c=$a->idCardDiscern(file_get_contents("http://img.jiaodong.net/pic/0/10/82/57/10825755_879172.jpg"));
var_dump($c);