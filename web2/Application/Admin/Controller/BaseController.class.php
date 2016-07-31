<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function __initalize(){
        if (isset($_SESSION['username'])){
            //已登陆
        }else {
            $this->redirect('Public/login');
        }
    }
}