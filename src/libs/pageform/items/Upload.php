<?php
declare (strict_types=1);

namespace eduline\admin\libs\pageform\items;

use eduline\admin\libs\pageform\items\interfaces\ArgsInterface;

class Upload extends ArgsInterface
{
    protected $type = 'upload';

    /**
     * 上传选择类型
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string $type options\UploadType::class
     * @return   [type]                               [description]
     */
    public function uploadType(string $type): self
    {
        return $this->setArgs('upload_type', $type);
    }

    /**
     * 是否自动上传,upload_type 为 default 时生效
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param bool|boolean $autoupload [description]
     * @return   self
     */
    public function autoupload(bool $autoupload = true): self
    {
        return $this->setArgs('autoupload', $autoupload === true ? 1 : 0);
    }

    /**
     * 接受的文件类型
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-12
     *
     * @param string $accept [description]
     * @return   [type]                                 [description]
     */
    public function accept(string $accept = ''): self
    {
        return $this->setArgs('accept', $accept);
    }

    /**
     * 设置允许最大个数 upload_type != 'avatar' 生效
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-12
     *
     * @param int|integer $limit [description]
     * @return   [type]                                [description]
     */
    public function limit(int $limit = 1): self
    {
        return $this->setArgs('limit', $limit);
    }

    /**
     * 默认提示文字
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-06
     *
     * @param string|null $placeholder [description]
     * @return   self
     */
    public function placeholder(string $placeholder = null): self
    {
        return $this->setArgs('placeholder', $placeholder);
    }

    /**
     * 文件列表的类型 upload_type 为 'drag', 'custom', 'default'生效
     * Author   Martinsun<syh@sunyonghong.com>
     * Date:  2020-03-12
     *
     * @param string $listType options\listType::class
     * @return   [type]                                   [description]
     */
    public function listType(string $listType): self
    {
        return $this->setArgs('list_type', $listType);
    }

}
