<?php
declare (strict_types = 1);
namespace eduline\admin\page\interfaces;

use think\facade\Request;
use app\common\service\BaseService;

/**
 * 发送响应的方法
 */
abstract class Response extends BaseService
{
	/**
	 * 发送数据方法
	 * @Author   Martinsun<syh@sunyonghong.com>
	 * @DateTime 2020-03-07
	 * @return   think\Response
	 */
    public function send()
    {
        $data = $this->getContent();

        return $this->parseToData($data,1);
    }

    abstract protected function getContent();
}
