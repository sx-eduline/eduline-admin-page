<?php
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Slider extends ArgsInterface
{
    protected $type = 'slider';

    /**
     * 是否显示提示
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $show [description]
     * @return   self
     */
    public function tooltip(bool $show = true): self
    {
        return $this->setArgs('tooltip', $show === true ? 1 : 0);
    }

    /**
     * 是否显示输入框
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $show [description]
     * @return   self
     */
    public function input(bool $show = true): self
    {
        return $this->setArgs('input', $show === true ? 1 : 0);
    }

    /**
     * 最小值
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $length [description]
     * @return   self
     */
    public function min(int $length = 1): self
    {
        return $this->setArgs('min', $length);
    }
    /**
     * 最大值
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $length [description]
     * @return   self
     */
    public function max(int $length = 1): self
    {
        return $this->setArgs('max', $length);
    }
}
