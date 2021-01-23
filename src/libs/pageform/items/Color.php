<?php
declare (strict_types=1);

namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Color extends ArgsInterface
{
    protected $type = 'color';

    /**
     * 是否支持透明度
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param bool|boolean $alpha [description]
     * @return   self
     */
    public function alpha(bool $alpha = true): self
    {
        return $this->setArgs('alpha', $alpha === true ? 1 : 0);
    }
}
