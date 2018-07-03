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
            ['name' => 'title','field' => ['title'],'title'=>'','href'=>'[EDIT]'],
            ['name' => 'type','field' => ['type'],'title'=>'类型'],
            ['name' => 'update_time','field' => ['update_time'],'title'=>'最后更新'],
            ['name' => 'status','field' => ['status'],'title'=>'状态'],
            ['name' => 'view','field' => ['view'],'title'=>'浏览'],
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
            $lists['total'] = db('vip')->count();
            $lists['per_page'] = input('limit',10);
            $lists['current_page'] = input('page',1);
            $lists['last_page'] = 10;
            $lists['code'] = 1;
            $data = db('vip')->order('id desc')->page($lists['current_page'],$lists['per_page'])->select();
            $datas = [];
            foreach($data as $k => $item){
                $mobile = $item['mobile'];
                $name = $item['name'];
                $remark = $item['remark'];
                $create_time = $item['create_time'];
                $is_pay = $item['is_pay'];
                $action = '<a href="/admin/service/editCall/id/'.$item['id'].'.html">编辑</a>';
                if($item['is_pay'] == 0){
                    $action .= ' | <a href="/admin/finance/status/act/income/id/'.$item['id'].'.html">收款</a>';
                }elseif($item['is_pay'] == 1){
                    $action .= ' | <a href="/admin/finance/status/act/refund/id/'.$item['id'].'.html">退款</a>';
                }

                $tem = array('',$item['id'],$mobile,$name,$remark,$create_time,$is_pay,$action);
                unset($tem[0]);
                $datas[] = $tem;
            }

            $lists['data'] = $datas;
            return $lists;
        }
        $this->assign('meta_title', '管理->服务订单');
//
//        $model_info['url'] = $this->request->url();
        $this->assign('model_info',$form);
        return $this->fetch('service/call');
    }

    public function status()
    {
        $id     =   input('id','');
        $act    =   input('act','');
        if(empty($id) || empty($act)){
            $this->error('参数不能为空！');
        }
        $vip = model('home/Promote');
        if($act == 'income'){
            $vip->save(['is_pay' => 1],['id' => $id]);
            $this->success('更新成功', Cookie('__forward__'));
        }
        if($act == 'refund'){
            $vip->save(['is_pay' => 2],['id' => $id,'is_pay' => 1]);
            $this->success('更新成功', Cookie('__forward__'));
        }

    }
}