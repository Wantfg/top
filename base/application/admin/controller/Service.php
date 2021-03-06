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

        $uid_info = db('member')->alias('m')->field('m.*,aga.group_id')->where('m.uid',session('user_auth.uid'))->join('__AUTH_GROUP_ACCESS__ aga','m.uid = aga.uid','LEFT')->find();
        if(!empty($uid_info['code'])){
            $this->assign('code',$uid_info['code']);
        }
//        $param = $this->request->param();
        $form['field'] = ["id","title","type","update_time","status","view"];
        $form['list_field'] = [
            ['name' => 'id','field' => ['id'],'title'=>'编号'],
            ['name' => 'title','field' => ['title'],'title'=>'手机号','href'=>'[EDIT]'],
            ['name' => 'type','field' => ['type'],'title'=>'姓名'],
            ['name' => 'update_time','field' => ['update_time'],'title'=>'其他备注'],
            ['name' => 'status','field' => ['status'],'title'=>'添加时间'],
            ['name' => 'view','field' => ['view'],'title'=>'状态'],
            ['name' => 'id','field' => ['id'],'title'=>'操作','href'=>'[EDIT]|编辑,[DELETE]|删除'],
        ];
        $form['pk'] = 'id';
//        $form['button'] = [
//            ['title' => '新增','type' => 'select','extra' => array(['title' => '文章','url' => 'article/add?cate_id=2&model_id=2&pid=0','class'=>'ajax-get iframe'],['title' => '下载','url' => 'article/add?cate_id=2&model_id=3&pid=0','class'=>'ajax-get iframe']),'class'=>'bg-aqua'],
//            ['title' => '启用','url' => 'setstatus?status=1&cate_id=2','icon' => '','class' => 'bg-teal ajax-post','ExtraHTML' => 'target-form="ids"'],
//            ['title' => '禁用','url' => 'setstatus?status=0&cate_id=2','icon' => '','class' => 'bg-yellow ajax-post confirm','ExtraHTML' => 'target-form="ids"'],
//            ['title' => '删除','url' => 'setstatus?status=-1&cate_id=2','icon' => '','class' => 'bg-red ajax-post confirm','ExtraHTML' => 'target-form="ids"'],
//        ];
        $form['url'] = '/admin/service/call.html';
        if ($this->request->isPost()) {
            $like_seach = input('like_seach','');
            $lists['per_page'] = input('limit',10);
            $lists['current_page'] = input('page',1);
            $lists['last_page'] = 10;
            $lists['code'] = 1;
            $orderby = 'update_time desc,id desc';
            $where = [];
            if(!empty($like_seach)){
                $where['mobile'] = array('like','%'.$like_seach.'%');
            }
            $lists['total'] = db('vip')->where($where)->count();
            if($uid_info['group_id'] != 3 && $uid_info['uid'] != 1){
                $where['uid'] = $uid_info['uid'];
                $lists['total'] = db('vip')->where($where)->count();
            }

            $data = db('vip')->where($where)->page($lists['current_page'],$lists['per_page'])->order($orderby)->select();
            $datas = [];
            foreach($data as $k => $item){
                $mobile = $item['mobile'];
                $name = $item['name'];
                $remark = $item['remark'];
                $create_time = date("Y-m-d H:i:s",$item['create_time']);
                if($item['is_pay'] == 1){
                    $is_pay = '已付款';
                }elseif($item['is_pay'] == 2){
                    $is_pay = '已退款';
                }else{
                    $is_pay = '未付款';
                }

                $action = '<a href="/admin/service/editCall/id/'.$item['id'].'.html">编辑</a>';

                $tem = array('',$item['id'],$mobile,$name,$remark,$create_time,$is_pay,$action);
                unset($tem[0]);
                $datas[] = $tem;
            }

            $lists['data'] = $datas;
            return $lists;
        }
        $this->assign('meta_title', '支付->服务订单');
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
        if($this->request->isPost()){
            $vip = model('home/Vip');
            $update['mobile'] = input('mobile');
            $update['name'] = input('name');
            $update['remark'] = input('remark');
            $condition['id'] = $id;
            $vip->save($update,$condition);
            $this->success('更新成功', Cookie('__forward__'));
        }
        $info = db('vip')->where('id',$id)->find();
        $info['url'] = url('editCall');
        $promote_lists = db('promote_log')->alias('pl')->join('__PROMOTE__ pr','pl.promote_id = pr.id')->where('pr.id',$id)->field('pl.amount,pl.create_time')->order('pl.id desc')->select();
        $this->assign('promote_lists',$promote_lists);
        $this->assign('info',$info);
        return $this->fetch();
    }

    public function promoteOrder()
    {
        $uid_info = db('member')->alias('m')->field('m.*,aga.group_id')->where('m.uid',session('user_auth.uid'))->join('__AUTH_GROUP_ACCESS__ aga','m.uid = aga.uid','LEFT')->find();
        if(!empty($uid_info['code'])){
            $this->assign('code',$uid_info['code']);
        }
//        $param = $this->request->param();
        $form['field'] = ["id","title","type","update_time","status","view"];
        $form['list_field'] = [
            ['name' => 'id','field' => ['id'],'title'=>'编号'],
            ['name' => 'title','field' => ['title'],'title'=>'手机号','href'=>'[EDIT]'],
            ['name' => 'type','field' => ['type'],'title'=>'姓名'],
            ['name' => 'update_time','field' => ['update_time'],'title'=>'其他备注'],
            ['name' => 'status','field' => ['status'],'title'=>'添加时间'],
            ['name' => 'view','field' => ['amount'],'title'=>'已入账佣金'],
            ['name' => 'id','field' => ['id'],'title'=>'操作','href'=>'[EDIT]|编辑,[DELETE]|删除'],
        ];
        $form['pk'] = 'id';
        $form['url'] = '/admin/Service/promoteOrder.html';

        if ($this->request->isPost()) {
            $like_seach = input('like_seach','');
            $lists['per_page'] = input('limit',10);
            $lists['current_page'] = input('page',1);
            $lists['last_page'] = 10;
            $lists['code'] = 1;
            $orderby = 'update_time desc,id desc';
            $where = [];

            if(!empty($like_seach)){
                $where['mobile'] = array('like','%'.$like_seach.'%');
            }
            $lists['total'] = db('promote')->where($where)->count();
            if($uid_info['group_id'] != 3 && $uid_info['uid'] != 1){
                $where['uid'] = $uid_info['uid'];
                $lists['total'] = db('promote')->where($where)->count();
            }
            $data = db('promote')->where($where)->page($lists['current_page'],$lists['per_page'])->order($orderby)->select();

            $datas = [];
            foreach($data as $k => $item){
                $mobile = $item['mobile'];
                $name = $item['name'];
                $remark = $item['remark'];
                $create_time = date("Y-m-d H:i:s",$item['create_time']);
                $amount = $item['amount'] / 100;
                $action = '<a href="/admin/service/editCall/id/'.$item['id'].'.html">编辑</a>';

                $tem = array('',$item['id'],$mobile,$name,$remark,$create_time,$amount,$action);
                unset($tem[0]);
                $datas[] = $tem;
            }

            $lists['data'] = $datas;
            return $lists;
        }
        $this->assign('meta_title', '管理->佣金订单');

//        $model_info['url'] = $this->request->url();
        $this->assign('model_info',$form);
        return $this->fetch('service/pro');
    }

    public function editPromote()
    {
        $id     =   input('id','');
        if(empty($id)){
            $this->error('参数不能为空！');
        }
        if($this->request->isPost()){
            $promote = model('home/Promote');
            $update['mobile'] = input('mobile');
            $update['name'] = input('name');
            $update['remark'] = input('remark');
            $condition['id'] = $id;
            $promote->save($update,$condition);
            $this->success('更新成功', Cookie('__forward__'));
        }
        $info = db('vip')->where('id',$id)->find();
        $info['url'] = url('editCall');
        $this->assign('info',$info);
        return $this->fetch();
    }


}