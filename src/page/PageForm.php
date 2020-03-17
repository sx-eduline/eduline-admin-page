<?php
declare (strict_types = 1);
namespace eduline\admin\page;

use eduline\admin\page\interfaces\Response;

class PageForm extends Response
{
    use traits\PageKey;
    use traits\AssignList;
    use traits\Submit;
    use traits\Datas;

    /**
     * 获取数据的方法
     * @Author   Martinsun<syh@sunyonghong.com>
     * @DateTime 2020-03-06
     * @return   array
     */
    protected function getContent(): array
    {
        $contents          = $this->assignList;
        $contents['datas'] = $this->datas;
        // 根据排序处理字段顺序
        $pageKey  = array_merge(array_flip($this->pageKeySort), $this->pageKey);
        $_pageKey = [];
        foreach ($pageKey as $key => $v) {
            if (is_callable([$v, 'toArray'])) {
                $item        = $v->toArray();
                $item['key'] = $key;
                // title与key一致
                if (!$item['title']) {
                    $item['title'] = $key;
                }
                // 不存在args参数时,设置类型
                if (!$item['args']) {
                    $item['args'] = (object) [];
                }
            } else {
                $item = [
                    'key'   => $key,
                    'title' => $key,
                    'type'  => 'input',
                    'args'  => (object) [],
                ];
            }

            $_pageKey[] = $item;
        }

        $contents['pageKey'] = $_pageKey;
        // 提交方式
        $contents['saveMethod'] = $this->saveMethod;
        // 提交地址
        $contents['savePostUrl'] = $this->savePostUrl;

        return $contents;
    }

}
