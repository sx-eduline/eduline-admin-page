<?php
declare (strict_types=1);

namespace eduline\admin\libs\pageform;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;
use ReflectionClass;

class FormItem
{
    /**
     * 创建表单组件
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-07
     *
     * @param string|null $type [description]
     * @return   [type]                               [description]
     */
    public static function make(string $type = 'input'): ArgsInterface
    {
        $stdclass = __NAMESPACE__ . '\\items\\' . ucfirst($type);
        return $stdclass::make();
    }

    /**
     * option常量定义
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-07
     *
     * @param    [type]                         $classname [description]
     * @param    [type]                         $const     [description]
     * @return   [type]                                    [description]
     */
    public static function option($classname, $const)
    {
        $stdclass = __NAMESPACE__ . '\\items\\options\\' . ucfirst($classname);

        // 利用反射类获取常量
        return (new ReflectionClass($stdclass))->getconstant($const);
    }
}
