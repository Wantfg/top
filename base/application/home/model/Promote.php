<?php
 
namespace app\home\model;
use think\Model;

/**
 * 分类模型
 */
class Promote extends Model{

    protected $name = 'vip';
//    protected $autoWriteTimestamp = true;
    protected $updateTime = false;// 关闭自动写入update_time字段
}
