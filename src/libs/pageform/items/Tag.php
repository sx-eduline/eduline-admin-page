<?php
namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Tag extends ArgsInterface
{
    protected $type = 'tag';

    /**
     * 类型
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string                         $type options\TagType::class
     * @return   self
     */
    public function tagType(string $type): self
    {
        return $this->setArgs('type', $type);
    }

    /**
     * 主题
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    string                         $effect options\TagEffect::class
     * @return   self
     */
    public function tagEffect(string $effect): self
    {
        return $this->setArgs('effect', $effect);
    }


    /**
     * 是否可以删除
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $closable [description]
     * @return   self
     */
    public function closable(bool $closable = true): self
    {
        return $this->setArgs('closable', $closable === true ? 1 : 0);
    }

    /**
     * 是否有边框描边
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $hit [description]
     * @return   self
     */
    public function hit(bool $hit = true): self
    {
        return $this->setArgs('hit', $hit === true ? 1 : 0);
    }
}
