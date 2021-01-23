<?php
declare (strict_types=1);

namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Date extends ArgsInterface
{
    protected $type = 'date';

    /**
     * 日期类型
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $type options\DateType::class
     * @return   [type]                               [description]
     */
    public function dateType(string $type): self
    {
        return $this->setArgs('date_type', $type);
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
        if (!in_array($this->getArgs('date_type'), ['datetimerange', 'daterange', 'monthrange'])) {
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
        if (in_array($this->getArgs('date_type'), ['datetimerange', 'daterange', 'monthrange'])) {
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
        if (in_array($this->getArgs('date_type'), ['datetimerange', 'daterange', 'monthrange'])) {
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
    public function format(string $format = 'yyyy-MM-dd HH:mm:ss'): self
    {
        return $this->setArgs('format', $format);
    }

}
