<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $data=M('Form');
        $arry['center']=$data->where('type1="中心动态"')->limit(7)->select();
        $arry['notice']=$data->where('type1="活动公告"')->select();
        $arry['write']=$data->where('type1="作文写作"')->select();
        $arry['artic']=$data->where('type1="美术音乐"')->select();
        $arry['practice']=$data->where('type1="动手实践"')->select();
        $arry['differ']=$data->where('type1="分校教育"')->select();
        $arry['family']=$data->where('type1="家庭教育"')->select();
        $arry['other']=$data->where('type1="其他"')->select();
        $this->assign($arry);
        $this->display();
    }
}