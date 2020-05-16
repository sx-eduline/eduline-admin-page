<?php
declare (strict_types = 1);
namespace eduline\admin\libs\pageform\items\interfaces;

class ArgsInterface
{
    protected $args = [];
    protected $title;
    protected $visible;

    /**
     * 设置参数
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    [type]                         $name  [description]
     * @param    [type]                         $value [description]
     */
    public function setArgs($name, $value)
    {
        $this->args[$name] = $value;

        return $this;
    }

    /**
     * 获取参数
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    [type]                         $name [description]
     * @return   [type]                               [description]
     */
    public function getArgs($name = null)
    {
        if (is_null($name)) {
            return $this->args;
        }

        return isset($this->args[$name]) ? $this->args[$name] : null;

    }

    public function title($title = ''): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * 格式化数据
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @return   array
     */
    public function toArray(): array
    {
        return [
            'type'  => $this->type,
            'args'  => $this->getArgs(),
            'title' => $this->title,
        ];
    }

    /**
     * 是否存在某个参数
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    [type]                         $name 参数名
     * @return   boolean
     */
    public function hasArgs($name): bool
    {
        return isset($this->args[$name]) ? true : false;
    }

    /**
     * 创建一个实例
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @return   static
     */
    public static function make()
    {
        return new static();
    }

    public function __call($method, $args)
    {
        return $this->setArgs($method, ...$args);
    }

    public static function __callStatic($method, $args)
    {
        return self::make()->setArgs($method, ...$args);
    }

    /**
     * 是否禁用
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $disabled
     * @return   self
     */
    public function disabled(bool $disabled = true): self
    {
        return $this->setArgs('disabled', $disabled === true ? 1 : 0);
    }

    /**
     * 是否必须填写
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @param    bool|boolean                   $required
     * @return   self
     */
    public function required(bool $required = true): self
    {
        return $this->setArgs('required', $required === true ? 1 : 0);
    }

    /**
     * 设置帮助信息
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-16
     * @param    string $helpinfo 帮助信息,展示在字段的前面
     * @return   self
     */
    public function help(string $helpinfo): self
    {
        return $this->setArgs('helpinfo', $helpinfo);
    }

    public function visible($visible = true)
    {
        if ($visible instanceof \Closure) {
            $visible = app()->invokeFunction($visible);
        }

        $this->visible = $visible;

        return $this;
    }

    public function isVisible()
    {
        return $this->visible;
    }

}
