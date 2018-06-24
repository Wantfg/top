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
 * @title 系统配置
 * @author 小矮人  <82550565@qq.com>
 */
class Service extends Admin {

    public function call($cate_id = 2)
    {
        $param = $this->request->param();

//        var_dump($param);
//        if($cate_id===null)
//            $cate_id = $this->cate_id;
//        // 获取分类绑定的模型
//        $pid = isset($param['pid']) && !empty($param['pid'])?$param['pid']:0;
//        if ($pid == 0) {
//            $category_model_id     =   get_category($cate_id,'model');
//            // 获取分组定义
//            $groups		=	get_category($cate_id, 'groups');
//            if($groups){
//                $groups	=	parse_field_attr($groups);
//            }
//        }else{ // 子文档列表
//            $category_model_id     =   get_category($cate_id, 'model_sub');
//        }
//        $category_model_id || $this->error('该分类未绑定模型');
//        $model = $model_id = explode(',', $category_model_id);
//        $model_id = !is_array($model_id)? $model_id:$model_id['0'];
//
//        //绑定多个模型获取基础模型的列表定义(即分支模型V形模型)
//        if(!is_numeric($category_model_id)){
//            $model_type = 2;
//        }else{
//            $model_type = 1;
//        }
//
//        $ModelSystem = (new  System(['type'=>$model_type]))->info($model_id)->getListField()->getSearchList();
//        $model_info = $ModelSystem->getParam('info');
//
//        if($this->request->isPost()){
//            // 列表查询
//            $list   =   $ModelSystem->getSearchList()->getWhere()->getViewList()->parseList()->parseListIntent(false,false,[['[DELETE]','[EDIT]','[LIST]'],['setstatus?status=-1&ids=[id]&cate_id=[category_id]','edit?id=[id]&model=[model_id]&cate_id=[category_id]','index?pid=[id]&model=[model_id]&cate_id=[category_id]']])->getParam('info.data');
//            $list['code'] = 1;
//            return $list;
//        }
//
//        $this->assign('meta_title', '内容管理');
//        //获取面包屑信息
//        /*文档列表面包屑*/
//        if($nav_crumbs= get_parent_category($cate_id)){
//            foreach ($nav_crumbs as $key=>$value){
//                $nav_crumbs[$key]['url'] = url('index',['cate_id'=>$value['id']]);
//            }
//            $title_bar[] =[
//                'title' =>'文档列表',
//                'extra' => $nav_crumbs
//            ];
//        }
//        /*模型列表面包屑*/
//        $model_crumbs = false;
//        if(!empty($model)){
//            foreach ($model as $value){
//                $model_crumbs[] = [
//                    'url' => url('index',array('pid'=>$pid,'cate_id'=>$cate_id,'model_id'=>$value)),
//                    'title' => get_document_model($value,'title')
//                ];
//            }
//            $title_bar[] =[
//                'title' =>'模型',
//                'extra' => $model_crumbs
//            ];
//        }
//        $this->assign('title_bar',$title_bar);
//        //模型定义
//        $model_info['pk'] = 'id';
//        if(count($model) > 1){
//            foreach ($model as $value){
//                $add_button[] = ['title'=>get_document_model($value,'title'),'url'=>'article/add?cate_id='.$cate_id.'&model_id='.$value.'&pid='.$pid,'class'=>'ajax-get iframe'];
//            }
//            $add_button = ['title'=>'新增','type'=>'select','extra'=>$add_button,'class'=>'bg-aqua'];
//        }else{
//            $add_button = ['title'=>'新增','url'=>'article/add?cate_id='.$cate_id.'&pid='.$pid.'&model_id='.$model_id,'class'=>'bg-aqua ajax-get iframe','icon'=>'','ExtraHTML'=>''];
//        }
//        $model_info['button']     = [
//            $add_button,
//            ['title'=>'启用','url'=>'setstatus?status=1&cate_id='.$cate_id,'icon'=>'','class'=>'bg-teal ajax-post','ExtraHTML'=>'target-form="ids"'],
//            ['title'=>'禁用','url'=>'setstatus?status=0&cate_id='.$cate_id,'icon'=>'','class'=>'bg-yellow ajax-post confirm','ExtraHTML'=>'target-form="ids"'],
//            ['title'=>'删除','url'=>'setstatus?status=-1&cate_id='.$cate_id,'icon'=>'','class'=>'bg-red ajax-post confirm','ExtraHTML'=>'target-form="ids"']
//        ];
//
//        $model_info['url'] = $this->request->url();
//        $this->assign('model_info',$model_info);
//        // 记录当前列表页的cookie
//        Cookie('__forward__',$_SERVER['REQUEST_URI']);
//        $tpl = !empty($model_info['template_list'])?'think/'.$model_info['template_list']:'base/list';
        return $this->fetch('list');
    }
}