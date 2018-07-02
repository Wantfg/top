<?php
// +----------------------------------------------------------------------
// | TwoThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.twothink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 艺品网络  82550565@qq.com <www.twothink.cn> 
// +----------------------------------------------------------------------
namespace app\admin\controller;

use think\Db;
use think\modelinfo\System;

/**
 * Class Service
 * @package app\admin\controller
 */
class Service extends Admin
{

    public function call()
    {

        $uid_info = db('member')->alias('m')->where('m.uid',session('user_auth.uid'))->join('__AUTH_GROUP_ACCESS__ aga','m.uid = aga.uid')->find();
        if(!empty($uid_info['code'])){
            $this->assign('code',$uid_info['code']);
        }
//        $param = $this->request->param();
        $form['field'] = ["id","title","type","update_time","status","view"];
        $form['list_field'] = [
            ['name' => 'id','field' => ['id'],'title'=>'编号'],
            ['name' => 'title','field' => ['title'],'title'=>'','href'=>'[EDIT]'],
            ['name' => 'type','field' => ['type'],'title'=>'类型'],
            ['name' => 'update_time','field' => ['update_time'],'title'=>'最后更新'],
            ['name' => 'status','field' => ['status'],'title'=>'状态'],
            ['name' => 'view','field' => ['view'],'title'=>'浏览'],
            ['name' => 'id','field' => ['id'],'title'=>'操作','href'=>'[EDIT]|编辑,[DELETE]|删除'],
        ];
        $form['pk'] = 'id';
        $form['button'] = [
            ['title' => '新增','type' => 'select','extra' => array(['title' => '文章','url' => 'article/add?cate_id=2&model_id=2&pid=0','class'=>'ajax-get iframe'],['title' => '下载','url' => 'article/add?cate_id=2&model_id=3&pid=0','class'=>'ajax-get iframe']),'class'=>'bg-aqua'],
            ['title' => '启用','url' => 'setstatus?status=1&cate_id=2','icon' => '','class' => 'bg-teal ajax-post','ExtraHTML' => 'target-form="ids"'],
            ['title' => '禁用','url' => 'setstatus?status=0&cate_id=2','icon' => '','class' => 'bg-yellow ajax-post confirm','ExtraHTML' => 'target-form="ids"'],
            ['title' => '删除','url' => 'setstatus?status=-1&cate_id=2','icon' => '','class' => 'bg-red ajax-post confirm','ExtraHTML' => 'target-form="ids"'],
        ];
        $form['url'] = '/admin/service/call.html';

        if ($this->request->isPost()) {
            $lists['total'] = 1;
            $lists['per_page'] = 10;
            $lists['current_page'] = 1;
            $lists['last_page'] = 1;
            $lists['code'] = 1;
//            $data = [1,'<a href="/admin/article/edit/id/1/model/2/cate_id/2.html">TwoThink2.0正式版</a>',2,1504710688,1,121,'<a href="/admin/article/edit/id/1/model/2/cate_id/2.html">编辑</a> <a href="/admin/article/setstatus/status/-1/ids/1/cate_id/2.html">删除</a>'];
            $data = db('vip')->where('uid',$uid_info['uid'])->order('id desc')->select();
            $datas = [];
            foreach($data as $k => $item){
                $mobile = $item['mobile'];
                $name = $item['name'];
                $remark = $item['remark'];
                $create_time = $item['create_time'];
                $is_pay = $item['is_pay'];
                $action = '
<a href="/admin/service/editCall/id/'.$item['id'].'.html">编辑</a>';

                $tem = array('',$item['id'],$mobile,$name,$remark,$create_time,$is_pay,$action);
                unset($tem[0]);
                $datas[] = $tem;
            }

            $lists['data'] = $datas;

            return $lists;
        }
//        var_dump(session(''),$uid_info,json_decode($json,true));
        $this->assign('meta_title', '支付->服务订单');
//
//        $model_info['url'] = $this->request->url();
        $this->assign('model_info',$form);
        return $this->fetch();
    }

    public function editCall()
    {
        $id     =   input('id','');
        if(empty($id)){
            $this->error('参数不能为空！');
        }
        var_dump($id);
        return $this->fetch();
    }
}