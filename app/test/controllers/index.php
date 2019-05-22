<?php
/**
 * Created by PhpStorm.
 * User: chendongqin
 * Date: 2019/4/13
 * Time: 17:43
 */
namespace app\test\controllers;
use app\base;
use lib\ku\Poker\Niuniu;
use lib\ku\Poker\Tripleton;

class index extends base {

    public function index(){
        $users = [1,2,3,4,5,6,7,8,9,10];
        $business = new Tripleton(1001);
        $pokers = $business->deal($users);
        return $this->success('成功',$pokers);
    }

    public function count(){
        $business = new Niuniu(1001);
        $poker = ['poker'=>[
            ['id'=>3,'value' => 3, 'desc' => '黑桃3', 'type' => 1, 'photo' => ''],
            ['id' => 50, 'value' => 11, 'desc' => '方块J', 'type' => 4, 'photo' => ''],
            ['id' => 33, 'value' => 7, 'desc' => '梅花7', 'type' => 3, 'photo' => ''],
            ['id'=>37,'value' => 11, 'desc' => '梅花J', 'type' => 3, 'photo' => ''],
            ['id' => 52, 'value' => 13, 'desc' => '方块K', 'type' => 4, 'photo' => ''],
            ]];
        $allValues = array_column($poker['poker'], 'value');
        $allTypes = array_column($poker['poker'], 'type');
        $maxValue = max($allValues);
        $type = 4;
        foreach ($poker['poker'] as $item) {
            if ($item['value'] == $maxValue && $item['type'] < $type) {
                $type = $item['type'];
            }
        }
        $value = $business->countValue($allValues, $allTypes, $maxValue, $type);
        var_dump($value);

    }
}