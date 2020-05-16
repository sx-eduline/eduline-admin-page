<?php
declare (strict_types = 1);
namespace eduline\admin\page;

use eduline\admin\page\interfaces\Response;

class PageList extends Response
{
    use traits\PageKey;
    use traits\AssignList;
    use traits\Datas;
    use traits\SearchKey;

    protected function getContent(): array
    {
        $contents          = [];
        $contents['datas'] = $this->getDatas();

        $contents['pageKey'] = $this->getPageKey();

        $contents['searchKey'] = $this->getSearchKey();

        $contents = array_merge($this->assignList, $contents);

        return $contents;
    }

    protected function getDatas()
    {
        $data = $this->datas;
        if (is_object($data)) {
            $list  = $data;
            $data  = [];
            $_data = $list->all();
            foreach ($_data as $k => $v) {
                $data[] = $v->toArray();
            }
            if (is_callable([$list, 'total'])) {
                $page = [
                    'total'       => (int) $list->total(),
                    'listRows'    => (int) $list->listRows(),
                    'currentPage' => (int) $list->currentPage(),
                    'lastPage'    => (int) $list->lastPage(),
                ];

                $this->assignList['paginate'] = $page;
            }
        }

        return $data;
    }

    protected function getPageKey(): array
    {
        // 根据排序处理字段顺序
        $pageKey  = array_merge(array_flip($this->pageKeySort), $this->pageKey);
        $_pageKey = [];
        foreach ($pageKey as $key => $v) {
            if (is_callable([$v, 'toArray'])) {
                // 显示条件检测
                if (!$v->isVisible()) {
                    continue;
                }
                $item        = $v->toArray();
                $item['key'] = $key;
                // title与key一致
                if (!$item['title']) {
                    $item['title'] = $key;
                }
            } else {
                $item = [
                    'key'   => $key,
                    'title' => $key,
                    'type'  => 'word',
                ];
            }

            $_pageKey[] = $item;
        }

        return $_pageKey;
    }

    protected function getSearchKey(): array
    {
        // 根据排序处理字段顺序
        $searchKey  = array_merge(array_flip($this->searchKeySort), $this->searchKey);
        $_searchKey = [];
        foreach ($searchKey as $key => $v) {
            if (is_callable([$v, 'toArray'])) {
                // 显示条件检测
                if (!$v->isVisible()) {
                    continue;
                }
                $item        = $v->toArray();
                $item['key'] = $key;
                // title与key一致
                if (!$item['title'] && $item['title'] !== false) {
                    $item['title'] = $key;
                } elseif ($item['title'] === false) {
                    $item['title'] = '';
                }
            } else {
                $item = [
                    'key'   => $key,
                    'title' => $key,
                    'type'  => 'input',
                    'args'  => new \ArrayObject,
                ];
            }

            $_searchKey[] = $item;
        }

        return $_searchKey;
    }
}
