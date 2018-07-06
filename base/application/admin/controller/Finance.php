<?php
// +----------------------------------------------------------------------
// | TwoThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.twothink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 艺品网络  82550565@qq.com <www.twothink.cn> 
// +----------------------------------------------------------------------
namespace app\admin\controller;

/**
 * Class Service
 * @package app\admin\controller
 */
class Finance extends Admin
{

    public function order()
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
            ['name' => 'remark','field' => ['update_time'],'title'=>'其他备注'],
            ['name' => 'update_time','field' => ['status'],'title'=>'更新时间'],
            ['name' => 'create_time','field' => ['status'],'title'=>'添加时间'],
            ['name' => 'view','field' => ['view'],'title'=>'状态'],
            ['name' => 'id','field' => ['id'],'title'=>'操作','href'=>'[EDIT]|编辑,[DELETE]|删除'],
        ];
        $form['pk'] = 'id';
//        $form['button'] = [
//            ['title' => '新增','type' => 'select','extra' => array(['title' => '文章','url' => 'article/add?cate_id=2&model_id=2&pid=0','class'=>'ajax-get iframe'],['title' => '下载','url' => 'article/add?cate_id=2&model_id=3&pid=0','class'=>'ajax-get iframe']),'class'=>'bg-aqua'],.
//            ['title' => '启用','url' => 'setstatus?status=1&cate_id=2','icon' => '','class' => 'bg-teal ajax-post','ExtraHTML' => 'target-form="ids"'],
//            ['title' => '禁用','url' => 'setstatus?status=0&cate_id=2','icon' => '','class' => 'bg-yellow ajax-post confirm','ExtraHTML' => 'target-form="ids"'],
//            ['title' => '删除','url' => 'setstatus?status=-1&cate_id=2','icon' => '','class' => 'bg-red ajax-post confirm','ExtraHTML' => 'target-form="ids"'],
//        ];
        $form['url'] = '/admin/Finance/order.html';

        if ($this->request->isPost()) {
            $lists['per_page'] = input('limit',10);
            $lists['current_page'] = input('page',1);
            $lists['last_page'] = 10;
            $lists['code'] = 1;
            $like_seach = input('like_seach','');
            $orderby = 'update_time desc,id desc';
            $where = [];
            if(!empty($like_seach)){
                $where['mobile'] = array('like','%'.$like_seach.'%');
            }
            $lists['total'] = db('vip')->where($where)->count();
            if($uid_info['group_id'] != 3 && $uid_info['uid'] != 1){
                $where['uid'] =  $uid_info['uid'];
                $lists['total'] = db('vip')->where($where)->count();
            }
            $data = db('vip')->where($where)->order($orderby)->page($lists['current_page'],$lists['per_page'])->select();
            $datas = [];
            foreach($data as $k => $item){
                $mobile = $item['mobile'];
                $name = $item['name'];
                $remark = $item['remark'];
                $update_time = date("Y-m-d H:i:s",$item['update_time']);
                $create_time = date("Y-m-d H:i:s",$item['create_time']);
                if($item['is_pay'] == 1){
                    $is_pay = '已付款';
                }elseif($item['is_pay'] == 2){
                    $is_pay = '已退款';
                }else{
                    $is_pay = '未付款';
                }
                $action = '<a href="/admin/service/editCall/id/'.$item['id'].'.html">编辑</a>';
                if($item['is_pay'] == 0){
                    $action .= ' | <a href="/admin/finance/status/act/income/id/'.$item['id'].'.html">收款</a>';
                }elseif($item['is_pay'] == 1){
                    $action .= ' | <a href="/admin/finance/status/act/refund/id/'.$item['id'].'.html">退款</a>';
                }

                $tem = array('',$item['id'],$mobile,$name,$remark,$update_time,$create_time,$is_pay,$action);
                unset($tem[0]);
                $datas[] = $tem;
            }

            $lists['data'] = $datas;
            return $lists;
        }
        $this->assign('meta_title', '管理->服务订单');

//        $model_info['url'] = $this->request->url();
        $this->assign('model_info',$form);
        return $this->fetch('service/pro');
    }

    public function status()
    {
        $id     =   input('id','');
        $act    =   input('act','');
        if(empty($id) || empty($act)){
            $this->error('参数不能为空！');
        }
        $vip = model('home/Vip');
        if($act == 'income'){
            $vip->save(['is_pay' => 1],['id' => $id]);
            $this->success('更新成功', Cookie('__forward__'));
        }
        if($act == 'refund'){
            $vip->save(['is_pay' => 2],['id' => $id,'is_pay' => 1]);
            $this->success('更新成功', Cookie('__forward__'));
        }

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
            ['name' => 'remark','field' => ['remark'],'title'=>'其他备注'],
            ['name' => 'update_time','field' => ['update_time'],'title'=>'更新时间'],
            ['name' => 'create_time','field' => ['create_time'],'title'=>'添加时间'],
            ['name' => 'amount','field' => ['amount'],'title'=>'佣金总额'],
            ['name' => 'id','field' => ['id'],'title'=>'操作','href'=>'[EDIT]|编辑,[DELETE]|删除'],
        ];
        $form['pk'] = 'id';
        $form['url'] = '/admin/Finance/promoteOrder.html';

        if ($this->request->isPost()) {
            $lists['per_page'] = input('limit',10);
            $lists['current_page'] = input('page',1);
            $lists['last_page'] = 10;
            $lists['code'] = 1;
            $like_seach = input('like_seach','');
            $orderby = 'pr.update_time desc,pr.id desc';
            $where = [];
            if(!empty($like_seach)){
                $where['v.mobile'] = array('like','%'.$like_seach.'%');
            }
            $lists['total'] = db('promote')->alias('pr')->join('__VIP__ v','pr.vip_id = v.id','LEFT')->where($where)->count();
            if($uid_info['group_id'] != 3 && $uid_info['uid'] != 1){
                $where['pr.uid'] =  $uid_info['uid'];
                $lists['total'] = db('promote')->alias('pr')->join('__VIP__ v','pr.vip_id = v.id','LEFT')->where($where)->count();
            }
            $data = db('promote')->alias('pr')->where($where)->order($orderby)->join('__VIP__ v','pr.vip_id = v.id','LEFT')->page($lists['current_page'],$lists['per_page'])->field('pr.*,v.name,v.remark')->select();
            $datas = [];
            foreach($data as $k => $item){
                $mobile = $item['mobile'];
                $name = $item['name'];
                $remark = $item['remark'];
                $amount = $item['amount'] / 100;
                $update_time = date("Y-m-d H:i:s",$item['update_time']);
                $create_time = date("Y-m-d H:i:s",$item['create_time']);
                $action = '<a href="/admin/service/editCall/id/'.$item['id'].'.html">编辑</a> | <a href="/admin/Finance/addPromote/id/'.$item['id'].'.html">入账</a>';

                $tem = array('',$item['id'],$mobile,$name,$remark,$update_time,$create_time,$amount,$action);
                unset($tem[0]);
                $datas[] = $tem;
            }

            $lists['data'] = $datas;
            return $lists;
        }
        $this->assign('meta_title', '管理->佣金订单');
//
//        $model_info['url'] = $this->request->url();
        $this->assign('model_info',$form);
        return $this->fetch('service/pro');
    }

    public function addPromote()
    {
        $id     =   input('id','');
        if(empty($id)){
            $this->error('参数不能为空！');
        }
        if($this->request->isPost()){
            $data = input('');
            db('promote_log')->insert([
                'promote_id' => $data['id'],
                'amount' => $data['amount'],
                'create_time' => time(),
            ]);
            db('promote')->where('id' , $data['id'])->setInc('amount',$data['amount'] * 100);
            db('promote')->where('id' , $data['id'])->update(['update_time' => time()]);
            $this->success('更新成功', Cookie('__forward__'));
        }

        return $this->fetch('service/addpromote');


    }
}