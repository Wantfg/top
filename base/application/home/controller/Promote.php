<?php
// +----------------------------------------------------------------------
// | TwoThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.twothink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace app\home\controller;
use function Sodium\crypto_aead_aes256gcm_encrypt;

/**
 * 展示页
 * 
 */
class Promote extends Home{


	//留空默认页
    public function index(){}

    public function mobileSet(){}

    public function show()
    {
        //随机滚动数据设置
        $mobile_a_row = array(139,138,137,136,135,134,159,158,157,150,151,152,188,130,131,132,156,155,133,153,189);
        $name_str = '赵钱孙李周吴郑王冯陈卫蒋沈韩杨朱秦许何吕施张孔曹严华魏陶姜戚谢邹水章云苏潘范彭';
        $sex_row = array('先生','女士');
        $money_row = array('3000','4000','5000','6000','7000','8000','9000');
        $loops = [];
        for ($i=0;$i<20;$i++){
            $loop['mobile_a'] = $mobile_a_row[array_rand($mobile_a_row)];
            $loop['mobile_b'] = str_pad(mt_rand(0, 9999), 4, "0", STR_PAD_BOTH);
            $loop['name'] = mb_substr($name_str,mt_rand(0,mb_strlen($name_str)-1),1);
            $loop['sex'] = $sex_row[mt_rand(0,1)];
            $loop['money'] = $money_row[array_rand($money_row)];
            $loops[] = $loop;
        }
        $this->assign('loops',$loops);
        $this->assign('code_key',think_encrypt(time(),config('common_aes_key')));
        return $this->fetch();
    }

    public function vipIn()
    {
        $data = input('');
        $pro_info = db('member')->where('code',$data['pro_code'])->find();
        if(empty($pro_info)){
            return '专员编号错误，请联系专员';
        }
        $vip = model('Vip');
        $has_mobile = $vip->where(['mobile' => $data['mobile']])->find();
        if($has_mobile){
            $vip->save(['update_time' => time()],['id' => $has_mobile['id']]);
        }else{
            $vip->data([
                'uid' => $pro_info['uid'],
                'mobile' => $data['mobile'],
            ]);
            $vip->save();
        }
        $info = db('document')->where('id',1)->find();
        $this->assign('pay_qrcode_url',get_cover_path($info['cover_id']));
        return $this->fetch();
    }

    public function pro()
    {
        $this->assign('code_key',think_encrypt(time(),config('common_aes_key')));
        return $this->fetch();
    }


    public function promoteIn()
    {
        $data = input('');
        $pro_info = db('member')->where('code',$data['pro_code'])->find();
        if(empty($pro_info)){
            return '专员编号错误，请联系专员';
        }
        $promote = model('Promote');
        $has_mobile = $promote->where(['mobile' => $data['mobile']])->find();
        if($has_mobile){
            $promote->save(['update_time' => time()],['id' => $has_mobile['id']]);
        }else{
            $vip_id = db('vip')->where(['mobile' => $data['mobile']])->find();
            if(empty($vip_id)){
                $this->error('请先支付服务费');
            }
            $promote->data([
                'uid' => $pro_info['uid'],
                'vip_id' => $vip_id['id'],
                'mobile' => $data['mobile'],
            ]);
            $promote->save();
        }
        $info = db('document')->where('id',1)->find();
        $this->assign('pay_qrcode_url',get_cover_path($info['cover_id']));
        return $this->fetch('vipin');
    }
}
