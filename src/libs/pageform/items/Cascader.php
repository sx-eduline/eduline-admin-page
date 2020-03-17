<?php
declare (strict_types = 1);
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Cascader extends ArgsInterface
{
    protected $type = 'cascader';

    /**
     * 触发事件
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string                         $tigger options\Tigger::class
     * @return   self
     */
    public function tigger(string $tigger = 'click'): self
    {
        return $this->setArgs('tigger', $tigger);
    }

    /**
     * 默认提示文字
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string|null                    $placeholder [description]
     * @return   self
     */
    public function placeholder(string $placeholder = null): self
    {
        return $this->setArgs('placeholder', $placeholder);
    }
}
