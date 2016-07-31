<?php
namespace Admin\Controller;

class PublicController extends BaseController
{

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // 提交登陆数据
            $date['username'] = I('post.username');
            $date['password'] = I('post.password');
            $user = M('user')->where($date)->find();
            if ($user == null) {
                // 登录失败
                $this->error('用户名或密码错误');
            } else {
                $_SESSION = $user;
                $this->success('登陆成功，正在跳转到后台',U('Index/index',array('type0'=>'首页','type1'=>'中心动态')));
            }
        } else {
            $this->display();
        }
    }
    public function logout(){
        session_destroy();
        $this->redirect('Home/Index/index');
    }
    public function changepw(){
        $this->display();
    }
}