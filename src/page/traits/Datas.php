<?php
namespace eduline\admin\page\traits;
/**
 * 页面默认回传的参数
 */
trait Datas
{
    /**
     * 页面默认数据, form调用时会回传,list调用时为列表数据
     * @var string
     */
    public $datas = [];
}
