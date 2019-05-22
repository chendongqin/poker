<?php
/**
 * Created by PhpStorm.
 * User: chendongqin
 * Date: 2019/5/22
 * Time: 9:09
 */

namespace lib\ku\Poker;

use lib\ku\redis;

class Base
{

    protected $_pokers = [
        ['id' => 1, 'value' => 14, 'desc' => '黑桃A', 'type' => 1, 'photo' => '/static/imgs/pokers/1.jpg'],
        ['id' => 2, 'value' => 2, 'desc' => '黑桃2', 'type' => 1, 'photo' => '/static/imgs/pokers/2.jpg'],
        ['id' => 3, 'value' => 3, 'desc' => '黑桃3', 'type' => 1, 'photo' => '/static/imgs/pokers/3.jpg'],
        ['id' => 4, 'value' => 4, 'desc' => '黑桃4', 'type' => 1, 'photo' => '/static/imgs/pokers/4.jpg'],
        ['id' => 5, 'value' => 5, 'desc' => '黑桃5', 'type' => 1, 'photo' => '/static/imgs/pokers/5.jpg'],
        ['id' => 6, 'value' => 6, 'desc' => '黑桃6', 'type' => 1, 'photo' => '/static/imgs/pokers/6.jpg'],
        ['id' => 7, 'value' => 7, 'desc' => '黑桃7', 'type' => 1, 'photo' => '/static/imgs/pokers/7.jpg'],
        ['id' => 8, 'value' => 8, 'desc' => '黑桃8', 'type' => 1, 'photo' => '/static/imgs/pokers/8.jpg'],
        ['id' => 9, 'value' => 9, 'desc' => '黑桃9', 'type' => 1, 'photo' => '/static/imgs/pokers/9.jpg'],
        ['id' => 10, 'value' => 10, 'desc' => '黑桃10', 'type' => 1, 'photo' => '/static/imgs/pokers/10.jpg'],
        ['id' => 11, 'value' => 11, 'desc' => '黑桃J', 'type' => 1, 'photo' => '/static/imgs/pokers/11.jpg'],
        ['id' => 12, 'value' => 12, 'desc' => '黑桃Q', 'type' => 1, 'photo' => '/static/imgs/pokers/12.jpg'],
        ['id' => 13, 'value' => 13, 'desc' => '黑桃K', 'type' => 1, 'photo' => '/static/imgs/pokers/13.jpg'],
        ['id' => 14, 'value' => 14, 'desc' => '红心A', 'type' => 2, 'photo' => '/static/imgs/pokers/14.jpg'],
        ['id' => 15, 'value' => 2, 'desc' => '红心2', 'type' => 2, 'photo' => '/static/imgs/pokers/15.jpg'],
        ['id' => 16, 'value' => 3, 'desc' => '红心3', 'type' => 2, 'photo' => '/static/imgs/pokers/16.jpg'],
        ['id' => 17, 'value' => 4, 'desc' => '红心4', 'type' => 2, 'photo' => '/static/imgs/pokers/17.jpg'],
        ['id' => 18, 'value' => 5, 'desc' => '红心5', 'type' => 2, 'photo' => '/static/imgs/pokers/18.jpg'],
        ['id' => 19, 'value' => 6, 'desc' => '红心6', 'type' => 2, 'photo' => '/static/imgs/pokers/19.jpg'],
        ['id' => 20, 'value' => 7, 'desc' => '红心7', 'type' => 2, 'photo' => '/static/imgs/pokers/20.jpg'],
        ['id' => 21, 'value' => 8, 'desc' => '红心8', 'type' => 2, 'photo' => '/static/imgs/pokers/21.jpg'],
        ['id' => 22, 'value' => 9, 'desc' => '红心9', 'type' => 2, 'photo' => '/static/imgs/pokers/22.jpg'],
        ['id' => 23, 'value' => 10, 'desc' => '红心10', 'type' => 2, 'photo' => '/static/imgs/pokers/23.jpg'],
        ['id' => 24, 'value' => 11, 'desc' => '红心J', 'type' => 2, 'photo' => '/static/imgs/pokers/24.jpg'],
        ['id' => 25, 'value' => 12, 'desc' => '红心Q', 'type' => 2, 'photo' => '/static/imgs/pokers/25.jpg'],
        ['id' => 26, 'value' => 13, 'desc' => '红心K', 'type' => 2, 'photo' => '/static/imgs/pokers/26.jpg'],
        ['id' => 27, 'value' => 14, 'desc' => '梅花A', 'type' => 3, 'photo' => '/static/imgs/pokers/27.jpg'],
        ['id' => 28, 'value' => 2, 'desc' => '梅花2', 'type' => 3, 'photo' => '/static/imgs/pokers/28.jpg'],
        ['id' => 29, 'value' => 3, 'desc' => '梅花3', 'type' => 3, 'photo' => '/static/imgs/pokers/29.jpg'],
        ['id' => 30, 'value' => 4, 'desc' => '梅花4', 'type' => 3, 'photo' => '/static/imgs/pokers/30.jpg'],
        ['id' => 31, 'value' => 5, 'desc' => '梅花5', 'type' => 3, 'photo' => '/static/imgs/pokers/31.jpg'],
        ['id' => 32, 'value' => 6, 'desc' => '梅花6', 'type' => 3, 'photo' => '/static/imgs/pokers/32.jpg'],
        ['id' => 33, 'value' => 7, 'desc' => '梅花7', 'type' => 3, 'photo' => '/static/imgs/pokers/33.jpg'],
        ['id' => 34, 'value' => 8, 'desc' => '梅花8', 'type' => 3, 'photo' => '/static/imgs/pokers/34.jpg'],
        ['id' => 35, 'value' => 9, 'desc' => '梅花9', 'type' => 3, 'photo' => '/static/imgs/pokers/35.jpg'],
        ['id' => 36, 'value' => 10, 'desc' => '梅花10', 'type' => 3, 'photo' => '/static/imgs/pokers/36.jpg'],
        ['id' => 37, 'value' => 11, 'desc' => '梅花J', 'type' => 3, 'photo' => '/static/imgs/pokers/37.jpg'],
        ['id' => 38, 'value' => 12, 'desc' => '梅花Q', 'type' => 3, 'photo' => '/static/imgs/pokers/38.jpg'],
        ['id' => 39, 'value' => 13, 'desc' => '梅花K', 'type' => 3, 'photo' => '/static/imgs/pokers/39.jpg'],
        ['id' => 40, 'value' => 14, 'desc' => '方块A', 'type' => 4, 'photo' => '/static/imgs/pokers/40.jpg'],
        ['id' => 41, 'value' => 2, 'desc' => '方块2', 'type' => 4, 'photo' => '/static/imgs/pokers/41.jpg'],
        ['id' => 42, 'value' => 3, 'desc' => '方块3', 'type' => 4, 'photo' => '/static/imgs/pokers/42.jpg'],
        ['id' => 43, 'value' => 4, 'desc' => '方块4', 'type' => 4, 'photo' => '/static/imgs/pokers/43.jpg'],
        ['id' => 44, 'value' => 5, 'desc' => '方块5', 'type' => 4, 'photo' => '/static/imgs/pokers/44.jpg'],
        ['id' => 45, 'value' => 6, 'desc' => '方块6', 'type' => 4, 'photo' => '/static/imgs/pokers/45.jpg'],
        ['id' => 46, 'value' => 7, 'desc' => '方块7', 'type' => 4, 'photo' => '/static/imgs/pokers/46.jpg'],
        ['id' => 47, 'value' => 8, 'desc' => '方块8', 'type' => 4, 'photo' => '/static/imgs/pokers/47.jpg'],
        ['id' => 48, 'value' => 9, 'desc' => '方块9', 'type' => 4, 'photo' => '/static/imgs/pokers/48.jpg'],
        ['id' => 49, 'value' => 10, 'desc' => '方块10', 'type' => 4, 'photo' => '/static/imgs/pokers/49.jpg'],
        ['id' => 50, 'value' => 11, 'desc' => '方块J', 'type' => 4, 'photo' => '/static/imgs/pokers/50.jpg'],
        ['id' => 51, 'value' => 12, 'desc' => '方块Q', 'type' => 4, 'photo' => '/static/imgs/pokers/51.jpg'],
        ['id' => 52, 'value' => 13, 'desc' => '方块K', 'type' => 4, 'photo' => '/static/imgs/pokers/52.jpg'],
    ];

    protected $_pokerTypes = [
        '1' => '黑桃',
        '2' => '红心',
        '3' => '梅花',
        '4' => '方块',
    ];

    protected $_roomId = '';
    protected $_pokerKey = '';
    private $redis = '';


    public function __construct($roomId, $joinKing = false)
    {
        $this->_roomId = $roomId;
        //是否出现大小王
        if ($joinKing) {
            $pokers = $this->getPokers();
            array_push($pokers, ['id' => 53, 'value' => 15, 'desc' => '小王', 'type' => 5, 'photo' => '/static/imgs/pokers/53.jpg']);
            array_push($pokers, ['id' => 54, 'value' => 16, 'desc' => '大王', 'type' => 5, 'photo' => '/static/imgs/pokers/54.jpg']);
            $this->setPokers($pokers);
        }
        //初始化洗牌
        $this->shuffle();
    }

    /**
     * 获取第一张牌
     * @return mixed
     */
    protected function getFirstPoker()
    {
        $pokers = $this->getPokers();
        $poker = $pokers[0];
        unset($pokers[0]);
        $this->setPokers($pokers);
        return $poker;
    }


    /**
     * 设置牌
     * @param array $pokers
     * @return $this
     */
    protected function setPokers(array $pokers)
    {
        $this->_pokers = $pokers;
        return $this;
    }

    /**
     * 获取牌
     * @return array
     */
    protected function getPokers()
    {
        $pokers = array_values($this->_pokers);
        return $pokers;
    }

    /**
     * 洗牌
     * @return Base
     */
    protected function shuffle()
    {
        $pokers = $this->getPokers();
        shuffle($pokers);
        return $this->setPokers($pokers);
    }

    /**
     * 根据房间缓存牌
     * @param array $pokers
     * @return $this
     */
    protected function cashRoomPokers(array $pokers)
    {
        $key = sprintf($this->_pokerKey, $this->_roomId);
        $redis = $this->getRedis();
        $redis->set($key, json_encode($pokers), 600);
        return $this;
    }

    /**
     * 获取房间牌
     * @return mixed
     */
    protected function getRoomPokers()
    {
        $redis = $this->getRedis();
        $key = sprintf($this->_pokerKey, $this->_roomId);
        $pokersJson = $redis->get($key);
        $pokers = json_decode($pokersJson, true);
        return $pokers;
    }


    /**
     * 获取redis
     * @return redis|string
     */
    protected function getRedis()
    {
        if (empty($this->redis)) {
            $redis = new redis();
            $this->redis = $redis;
        }
        return $this->redis;
    }


//    public function __destruct()
//    {
//        $redis = $this->getRedis();
//        $key = sprintf($this->_pokerKey,$this->_roomId);
//        $redis->delete($key);
//    }

}