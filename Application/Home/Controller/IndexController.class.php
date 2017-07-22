<?php
namespace Home\Controller;
use Home\Model\CateModel;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Cate = new CateModel();
        $cates = $Cate->getAllCate();
        $this->assign("cates",$cates);
        $this->display();
    }

}