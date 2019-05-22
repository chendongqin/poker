<?php
/**
 * Created by PhpStorm.
 * User: chendongqin
 * Date: 2019/5/22
 * Time: 8:55
 */

namespace lib\ku\Poker;
class Tripleton extends Base
{

    protected $_pokerKey = 'TRIPLETON_ROOMS_%s';
    protected $_pokerValueKey = 'TRIPLETON_VALUE_ROOMS_%s';


    /**
     * 发牌
     * @param array $users
     * @return array
     */
    public function deal(array $users)
    {
        $pokers = [];
        for ($i = 0; $i < 3; $i++) {
            foreach ($users as $user) {
                $pokers[$user]['poker'][] = $this->getFirstPoker();
            }
        }
        $values = [];
        foreach ($pokers as $key => $poker) {
            $value = $this->countValue($poker['poker']);
            $pokers[$key]['is_out'] = 0;
            $values[$key] = $value;
//            $pokers[$key]['value'] = $value['value'];
//            $pokers[$key]['pokerType'] = $value['pokerType'];
        }
        $this->cashRoomPokerValues($values);
        $this->cashRoomPokers($pokers);
        return $pokers;
    }

    /**
     * 计算牌大小
     * @param array $poker
     * @return array
     */
    public function countValue(array $poker)
    {
        $twain1 = false;//对子*2*200+散牌 最小：828，最大：5626
        $twain2 = false;//对子*2*200+散牌 最小：828，最大：5626
        $sort = false;//顺子最大值*2000 最小：6000 最大28000
        $jinhua = false;//金花最大值*10000+第二大*1000+最小值，最小值53002，最大153011
        //顺金最大值*100000 最小300000最大1400000
        $king = false;//炸弹*1000000 最小 2000000 最大14000000
        $pokerTypes = array_column($poker, 'type');
        $pokerValue = array_column($poker, 'value');
        $this->pokerType($pokerValue, $pokerTypes, $twain1,$twain2, $sort, $jinhua, $king);
        if ($king) {
            $value = $pokerValue[0] * 1000000;
            $pokerType = '炸弹';
        } elseif ($jinhua && $sort) {
            $value = $pokerValue[0] * 100000;
            $pokerType = '顺金';
        } elseif ($jinhua){
            $value = $pokerValue[0] * 10000 + $pokerValue[1] *1000 + $pokerValue[0];
            $pokerType = '金花';
        } elseif($sort){
            $value = $pokerValue[0] * 2000;
            $pokerType = '顺子';
        } elseif($twain1){
            $value = $pokerValue[0] * 200 + $pokerValue[2];
            $pokerType = '对子';
        }elseif($twain2){
            $value = $pokerValue[2] * 200 + $pokerValue[0];
            $pokerType = '对子';
        }else{
            $value = 28 * $pokerValue[0] + 2 * $pokerValue[1] + $pokerValue[2];
            $pokerType = '散牌';
        }
        return ['value'=>$value,'pokerType'=>$pokerType];
    }

    /**
     * 计算牌类型
     * @param array $pokerValue
     * @param array $pokerType
     * @param $twain1
     * @param $twain2
     * @param $sort
     * @param $jinhua
     * @param $king
     * @return bool
     */
    public function pokerType(array &$pokerValue, array $pokerType, &$twain1, &$twain2, &$sort, &$jinhua, &$king)
    {
        arsort($pokerValue);
        $pokerValue = array_values($pokerValue);
        if ($pokerValue[0] == $pokerValue[1] and $pokerValue[0] == $pokerValue[2]) {
            $king = true;
            return true;
        } elseif ($pokerValue[0] == $pokerValue[1]) {
            $twain1 = true;
            return true;
        } elseif ($pokerValue[1] == $pokerValue[2]) {
            $twain2 = true;
            return true;
        } elseif ($pokerValue[0] == $pokerValue[1] + 1 && $pokerValue[1] == $pokerValue[2] + 1) {
            $sort = true;
        } elseif ($pokerValue[0] == 14 && $pokerValue[1] == 3 && $pokerValue[2] == 2) {
            $pokerValue[0] = 1;
            arsort($pokerValue);
            $sort = true;
        }
        if ($pokerType[0] == $pokerType[1] and $pokerType[0] == $pokerType[2]) {
            $jinhua = true;
        }
        return true;
    }

    /**
     * 缓存poker的类型和大小
     * @param array $values
     * @return $this
     */
    protected function cashRoomPokerValues(array $values){
        $key = sprintf($this->_pokerValueKey,$this->_roomId);
        $redis = $this->getRedis();
        foreach ($values as $k=>$value){
            $redis->hSet($key,$k,json_encode($value));
        }
        return $this;
    }

    /**
     * 获取poker的类型和大小
     * @param string $k
     * @return array
     */
    public function getRoomPokerValues($k = ''){
        $key = sprintf($this->_pokerValueKey,$this->_roomId);
        $redis = $this->getRedis();
        $data = [];
        if(!empty($k)){
            $json = $redis->hGet($key,$k);
            $data = json_decode($json,true);
        }else{
            $ks = $redis->hKeys($key);
            foreach ($ks as $k){
                $json = $redis->hGet($key,$k);
                $data[$k] = json_decode($json,true);
            }
        }
        return $data;
    }


}