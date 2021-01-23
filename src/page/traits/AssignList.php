<?php

namespace eduline\admin\page\traits;

/**
 * 自定义传递选项
 */
trait AssignList
{
    /**
     * 自定义传递数据
     *
     * @var []
     */
    protected $assignList = [];

    /**
     * 获取页面配置参数
     *
     * @return
     */
    public function __get($name)
    {
        return $this->assignList[$name];
    }

    /**
     * 设置页面配置参数
     */
    public function __set($name, $value)
    {
        $this->assignList[$name] = $value;
    }
}
