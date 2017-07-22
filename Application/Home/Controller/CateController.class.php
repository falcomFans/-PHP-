<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/22
 * Time: 20:16
 */

namespace Home\Controller;
use Home\Model\CateModel;
use Think\Controller;

class CateController  extends Controller
{
    public function add()
    {
        $data = I("post.");
        $Cate = new CateModel();
        if ($Cate->addCate($data))
        {
            $this->success("添加分类成功",U("Index/index"),2);
        }
    }

}