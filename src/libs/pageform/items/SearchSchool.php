<?php
declare (strict_types = 1);
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class SearchSchool extends ArgsInterface
{
    protected $type = 'search_school';
    /**
     * 默认提示文字
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-07-06
     * @param    string|null                    $placeholder [description]
     * @return   self
     */
    public function placeholder(string $placeholder = null): self
    {
        return $this->setArgs('placeholder', $placeholder);
    }

}
