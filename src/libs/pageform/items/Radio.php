<?php
declare (strict_types = 1);
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Radio extends ArgsInterface
{
    protected $type = 'radio';

    /**
     * 边框格式
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string|null                    $style options\ButtonStyle::class
     * @return   self
     */
    public function style(string $style = null): self
    {
        return $this->setArgs('style', $style);
    }
    
    /**
     * 设置选项
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-25
     * @param    array                          $options 选项项目 ['title'=>'显示文字','value'=>'值']
     * @return   [type]                                  [description]
     */
    public function options(array $options)
    {
        return $this->setArgs('options', $options);
    }
}
