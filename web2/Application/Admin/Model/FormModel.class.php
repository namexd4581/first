<?php
namespace Admin\Model;
use Think\Model;
class FormModel extends Model{
    protected $_validate=array(
        array('title','require','标题必须写'),
    );
//     protected $_auto=array(
//         array('status','1'),
//         array('create_time','create_time','1','callback'),
//     );
//     protected function  create_time(){
//         return date("[Y-m-d]");
//     }
}
