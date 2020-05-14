<?php
declare (strict_types = 1);
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class InputNumber extends ArgsInterface
{
    protected $type = 'input_number';
    /**
     * 最小值
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $length [description]
     * @return   self
     */
    public function min($length = 1): self
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
    public function max($length = 1): self
    {
        return $this->setArgs('max', $length);
    }
    /**
     * 保留几位小数
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $precision [description]
     * @return   self
     */
    public function precision(int $precision = 0): self
    {
        return $this->setArgs('precision', $precision);
    }
    /**
     * 步长
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $step [description]
     * @return   self
     */
    public function step($step = 1): self
    {
        return $this->setArgs('step', $step);
    }
}