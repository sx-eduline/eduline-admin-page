<?php

namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Time extends ArgsInterface
{
    protected $type = 'time';

    /**
     * 时间类型
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $type options\TimeType::class
     * @return   [type]                               [description]
     */
    public function timeType(string $type): self
    {
        return $this->setArgs('time_type', $type);
    }

    /**
     * 开启范围选择
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param bool|boolean $range [description]
     * @return   self
     */
    public function range(bool $range = true): self
    {
        return $this->setArgs('is_range', $range === true ? 1 : 0);
    }

    /**
     * 默认提示文字
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $placeholder [description]
     * @return   [type]                                      [description]
     */
    public function placeholder(string $placeholder = '选择日期'): self
    {
        if ($this->getArgs('is_range') == 0) {
            return $this->setArgs('placeholder', $placeholder);

        }

        return $this;
    }

    /**
     * 开始时间提示文字
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $placeholder [description]
     * @return   [type]                                      [description]
     */
    public function startPlaceholder(string $placeholder = '开始日期'): self
    {
        if ($this->getArgs('is_range') == 1) {
            return $this->setArgs('start_placeholder', $placeholder);

        }

        return $this;
    }

    /**
     * 结束时间提示文字
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $placeholder [description]
     * @return   [type]                                      [description]
     */
    public function endPlaceholder(string $placeholder = '结束日期'): self
    {
        if ($this->getArgs('is_range') == 1) {
            return $this->setArgs('end_placeholder', $placeholder);

        }

        return $this;
    }

    /**
     * 设置日期解析格式
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $format [description]
     * @return   [type]                                 [description]
     */
    public function format(string $format = 'HH:mm:ss'): self
    {
        return $this->setArgs('format', $format);
    }

}
