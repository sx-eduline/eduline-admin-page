<?php
declare (strict_types = 1);
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Checkbox extends ArgsInterface
{
    protected $type = 'checkbox';
    /**
     * 最少选择几项
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $length [description]
     * @return   self
     */
    public function min(int $length = 0): self
    {
        return $this->setArgs('min', $length);
    }
    /**
     * 最多选择几项
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $length [description]
     * @return   self
     */
    public function max(int $length = 1): self
    {
        return $this->setArgs('max', $length);
    }

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
}
