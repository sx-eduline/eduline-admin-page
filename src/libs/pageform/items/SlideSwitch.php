<?php

namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class SlideSwitch extends ArgsInterface
{
    protected $type = 'switch';

    /**
     * 开启显示文字
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $text [description]
     * @return   self
     */
    public function activeText(string $text = '开启'): self
    {
        return $this->setArgs('active_text', $text);
    }

    /**
     * 开启选中值
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param integer $value [description]
     * @return   self
     */
    public function activeValue($value = 1): self
    {
        return $this->setArgs('active_value', $value);
    }

    /**
     * 关闭显示文字
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $text [description]
     * @return   self
     */
    public function inactiveText(string $text = '关闭'): self
    {
        return $this->setArgs('inactive_text', $text);
    }

    /**
     * 关闭选中值
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param integer $value [description]
     * @return   self
     */
    public function inactiveValue($value = 1): self
    {
        return $this->setArgs('inactive_value', $value);
    }
}
