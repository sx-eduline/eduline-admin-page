<?php
declare (strict_types=1);

namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Rate extends ArgsInterface
{
    protected $type = 'rate';

    /**
     * 是否显示辅助文字
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param bool|boolean $show [description]
     * @return   self
     */
    public function showText(bool $show = true): self
    {
        return $this->setArgs('show_text', $show === true ? 1 : 0);
    }

    /**
     * 是否显示分数
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param bool|boolean $show [description]
     * @return   self
     */
    public function showScore(bool $show = true): self
    {
        return $this->setArgs('show_score', $show === true ? 1 : 0);
    }

    /**
     * 是否允许选择一半
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param bool|boolean $half [description]
     * @return   self
     */
    public function half(bool $half = true): self
    {
        return $this->setArgs('half', $half === true ? 1 : 0);
    }

    /**
     * 最大值
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param int|integer $length [description]
     * @return   self
     */
    public function max(int $length = 1): self
    {
        return $this->setArgs('max', $length);
    }

}
