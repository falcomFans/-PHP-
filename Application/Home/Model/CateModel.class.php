<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/22
 * Time: 20:16
 */

namespace Home\Model;
use Think\Model;

class CateModel  extends Model
{
    public function addCate($data)
    {
        $cate = [];
        $cate["cat_name"] = $data["cate_name"];
        $cateinfo = explode("|",$data["cate_info"]);
        $cate["cat_pid"] = $cateinfo[0];
        $cate["cat_level"] = $cateinfo[1]+1;

        $newID = $this->add($cate);
        return $newID === false ? false : true ;
    }

    /**取得所有分类数据
     * @return
     */
    public function getAllCate()
    {
        return $this->order("cat_left")->select();
    }

    //添加分类成功后，更新左右值字段
    protected function _after_insert($data, $options)
    {
        $this->getTree();
    }

    /**将PID结构的无限极分类变成左右值结构
     * @param $pid 顶级分类的父PID
     * @param $left  左值从什么开始，因为如论如何都会递归一次，左右如果传入0，那么左值的起点是1
     * @return mixed 没什么卵用的返回值
     */
    private function getTree($pid=0,$left=0)
    {
        $right = $left + 1;
        $result = $this->where("cat_pid = $pid")->field("cat_id")->select();
        foreach ($result as  $row) {
            $right = $this->getTree($row['cat_id'], $right);
        }
        $this->execute("UPDATE ca_cate SET cat_left = '" . $left . "', cat_right = '" . $right . "' WHERE cat_id = '" . $pid . "';");
        return $right+1;
    }
}