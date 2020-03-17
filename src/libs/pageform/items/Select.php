<?php
declare (strict_types = 1);
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Select extends ArgsInterface
{
    protected $type = 'select';

    /**
     * 是否开启多选
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $show [description]
     * @return   self
     */
    public function multiple(bool $show = true): self
    {
        return $this->setArgs('multiple', $show === true ? 1 : 0);
    }

    /**
     * 允许选择个数
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string|null                    为0表示不限制
     * @return   self
     */
    public function max(int $length = 0): self
    {
        if ($this->getArgs('multiple') == 1) {
            return $this->setArgs('max', $length);
        }

        return $this;
    }

    /**
     * 是否合并选项显示
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $megre [description]
     * @return   [type]                                [description]
     */
    public function megreTags(bool $megre = true) : self
    {
    	if ($this->getArgs('multiple') == 1) {
            return $this->setArgs('megre_tags', $megre);
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

}
