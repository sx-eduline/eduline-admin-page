<?php
namespace eduline\admin\page\traits;
/**
 * 提交可配置的参数
 */
trait Submit
{
    /**
     * 提交方式
     * @var string
     */
    public $saveMethod = 'POST';
    /**
     * 提交的路由地址
     * @var string
     */
    public $savePostUrl = '';
}
