<?php
declare (strict_types = 1);
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class InputPassword extends ArgsInterface
{
    protected $type = 'input_password';
    /**
     * 显示的icon图标名称,class名
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string|null                    $icon [description]
     * @return   self
     */
    public function icon(string $icon = null): self
    {
        if ($icon) {
            return $this->setArgs('icon', $icon);
        }

        return $this;
    }

    /**
     * 显示的图标位置
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string|null                    $postion options\IconPosition::class
     * @return   self
     */
    public function iconPosition(string $postion = null): self
    {
        if ($this->hasArgs('icon')) {
            return $this->setArgs('icon_postion', $postion);
        }

        return $this;
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

    /**
     * 前后置类容
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string|null                    $slot [description]
     * @return   self
     */
    public function slot(string $slot = null): self
    {
        return $this->setArgs('slot', $slot);
    }

    /**
     * 前后置位置
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string|null                    $postion [description]
     * @return   self
     */
    public function slotPostion(string $postion = null): self
    {
        if ($this->hasArgs('slot')) {
            return $this->setArgs('slot_postion', $postion);
        }

        return $this;
    }
}
