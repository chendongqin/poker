<?php
/**
 * Created by PhpStorm.
 * User: chendongqin
 * Date: 2019/4/15
 * Time: 17:35
 */

namespace app;
use lib\ku\session;

class userApi extends base
{
    private $user = [];
    public function _init()
    {
        $session = new session();
        $userId = $session->get('login_user');
        if(empty($userId)){
            $this->error('你没有登录');
            die();
        }
        $db = $this->getDb();
        $user = $db->find('user',['id'=>$userId]);
        if(empty($user)){
            $this->error('用户不存在');
            die();
        }
        $this->user = $user;
        parent::_init();
    }
// public function _init()
//    {
//        $redis = $this->getRedis();
//        $token = $this->helper->getParam('token','','string');
//        $userId = $redis->get($token);
//        if(empty($userId)){
//            $this->error('你没有登录');
//            die();
//        }
//        $db = $this->getDb();
//        $user = $db->find('user',['id'=>$userId]);
//        if(empty($user)){
//            $this->error('用户不存在');
//            die();
//        }
//        $this->user = $user;
//        parent::_init();
//    }

    protected function getLoginUser(){
        return $this->user;
    }

}