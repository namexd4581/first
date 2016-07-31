<?php
namespace Admin\Controller;

class IndexController extends BaseController
{

    public function index()
    {
        $form = M('form');
        $condition['type1'] = I('get.type1');
        $condition['status'] = 1;
        $count=$form->where($condition)->count();
        $Page=new \Think\Page($count,10);
        $Page->setConfig('first', '首页');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 
            第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ');
        $show=$Page->show();
        $data = $form->where($condition)
            ->order('create_time')
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $data['create_time']=date('Y-m-d');
        $this->assign("page",$show);
        $this->assign('data', $data);
        $this->display();
    }

    public function delete()
    {
        $where['id'] = I('get.id');
        $data = M('form');
        $save['status'] = 0;
        $result = $data->where($where)->save($save);
        if ($result) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    Public function insert()
    {
        $form = D('form');
        $data = array();
        $data['type0'] = $_POST['type0'];
        $data['type1'] = $_POST['type1'];
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['author'] = $_POST['author'];
        $data['create_time'] = date('[Y-m-d]');
        if ($form->create()) {
            $input = $form->add($data);
            if ($input) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        } else {
            $this->error($form->getError());
        }
    }

    Public function add_center()
    {
        $data['type0'] = I('get.type0');
        $data['type1'] = I('get.type1');
        $this->assign('type',$data);
        $this->display();
    }

    Public function edit_center()
    {
        $where = I('id');
        $form = M('form');
        $this->assign('center', $form->find($where));
        $this->display();
    }

    public function update_center()
    {
        $form = D('form');
        $data = array();
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['author'] = $_POST['author'];
        $data['create_time'] = date('[Y-m-d]');
        if ($form->create()) {
            
            $result = $form->save($data);
            if ($result) {
                $this->success('修改成功');
            } else {
                $this->error('修改失败');
            }
        } else {
            $this->error($form->getError());
        }
    }
}