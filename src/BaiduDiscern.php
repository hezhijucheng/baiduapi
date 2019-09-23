<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/23
 * Time: 9:57
 */
namespace baiduapi;


class BaiduDiscern extends AipOcr
{
	public function idCardDiscern($image, $idCardSide="front", $options=array()){

		return $this->idcard($image, $idCardSide, $options);

	}
}
