<?php
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Textarea extends ArgsInterface
{
    protected $type = 'textarea';
    /**
     * 最小长度
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $length [description]
     * @return   self
     */
    public function minlength(int $length = 1): self
    {
        return $this->setArgs('minlength', $length);
    }

    /**
     * 最大长度
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $length [description]
     * @return   self
     */
    public function maxlength(int $length = 99): self
    {
        return $this->setArgs('maxlength', $length);
    }

    /**
     * 是否显示字数统计
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $show [description]
     * @return   self
     */
    public function wordLimit(bool $show = true): self
    {
        return $this->setArgs('word_limit', $show === true ? 1 : 0);
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
     * 文本框默认显示行数,默认2行
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    int|integer                    $rows [description]
     * @return   self
     */
    public function rows(int $rows = 2): self
    {
        return $this->setArgs('rows', $rows);
    }
}
