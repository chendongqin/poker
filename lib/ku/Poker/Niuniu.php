<?php
/**
 * Created by PhpStorm.
 * User: chendongqin
 * Date: 2019/5/22
 * Time: 8:55
 */

namespace lib\ku\Poker;
class Niuniu extends Base
{

    protected $_pokerKey = 'NIUNIU_ROOMS_%s';

    protected $_pokers = [
        ['id' => 1, 'value' => 1, 'desc' => '黑桃A', 'type' => 1, 'photo' => ''],
        ['id' => 2, 'value' => 2, 'desc' => '黑桃2', 'type' => 1, 'photo' => ''],
        ['id' => 3, 'value' => 3, 'desc' => '黑桃3', 'type' => 1, 'photo' => ''],
        ['id' => 4, 'value' => 4, 'desc' => '黑桃4', 'type' => 1, 'photo' => ''],
        ['id' => 5, 'value' => 5, 'desc' => '黑桃5', 'type' => 1, 'photo' => ''],
        ['id' => 6, 'value' => 6, 'desc' => '黑桃6', 'type' => 1, 'photo' => ''],
        ['id' => 7, 'value' => 7, 'desc' => '黑桃7', 'type' => 1, 'photo' => ''],
        ['id' => 8, 'value' => 8, 'desc' => '黑桃8', 'type' => 1, 'photo' => ''],
        ['id' => 9, 'value' => 9, 'desc' => '黑桃9', 'type' => 1, 'photo' => ''],
        ['id' => 10, 'value' => 10, 'desc' => '黑桃10', 'type' => 1, 'photo' => ''],
        ['id' => 11, 'value' => 11, 'desc' => '黑桃J', 'type' => 1, 'photo' => ''],
        ['id' => 12, 'value' => 12, 'desc' => '黑桃Q', 'type' => 1, 'photo' => ''],
        ['id' => 13, 'value' => 13, 'desc' => '黑桃K', 'type' => 1, 'photo' => ''],
        ['id' => 14, 'value' => 1, 'desc' => '红心A', 'type' => 2, 'photo' => ''],
        ['id' => 15, 'value' => 2, 'desc' => '红心2', 'type' => 2, 'photo' => ''],
        ['id' => 16, 'value' => 3, 'desc' => '红心3', 'type' => 2, 'photo' => ''],
        ['id' => 17, 'value' => 4, 'desc' => '红心4', 'type' => 2, 'photo' => ''],
        ['id' => 18, 'value' => 5, 'desc' => '红心5', 'type' => 2, 'photo' => ''],
        ['id' => 19, 'value' => 6, 'desc' => '红心6', 'type' => 2, 'photo' => ''],
        ['id' => 20, 'value' => 7, 'desc' => '红心7', 'type' => 2, 'photo' => ''],
        ['id' => 21, 'value' => 8, 'desc' => '红心8', 'type' => 2, 'photo' => ''],
        ['id' => 22, 'value' => 9, 'desc' => '红心9', 'type' => 2, 'photo' => ''],
        ['id' => 23, 'value' => 10, 'desc' => '红心10', 'type' => 2, 'photo' => ''],
        ['id' => 24, 'value' => 11, 'desc' => '红心J', 'type' => 2, 'photo' => ''],
        ['id' => 25, 'value' => 12, 'desc' => '红心Q', 'type' => 2, 'photo' => ''],
        ['id' => 26, 'value' => 13, 'desc' => '红心K', 'type' => 2, 'photo' => ''],
        ['id' => 27, 'value' => 1, 'desc' => '梅花A', 'type' => 3, 'photo' => ''],
        ['id' => 28, 'value' => 2, 'desc' => '梅花2', 'type' => 3, 'photo' => ''],
        ['id' => 29, 'value' => 3, 'desc' => '梅花3', 'type' => 3, 'photo' => ''],
        ['id' => 30, 'value' => 4, 'desc' => '梅花4', 'type' => 3, 'photo' => ''],
        ['id' => 31, 'value' => 5, 'desc' => '梅花5', 'type' => 3, 'photo' => ''],
        ['id' => 32, 'value' => 6, 'desc' => '梅花6', 'type' => 3, 'photo' => ''],
        ['id' => 33, 'value' => 7, 'desc' => '梅花7', 'type' => 3, 'photo' => ''],
        ['id' => 34, 'value' => 8, 'desc' => '梅花8', 'type' => 3, 'photo' => ''],
        ['id' => 35, 'value' => 9, 'desc' => '梅花9', 'type' => 3, 'photo' => ''],
        ['id' => 36, 'value' => 10, 'desc' => '梅花10', 'type' => 3, 'photo' => ''],
        ['id' => 37, 'value' => 11, 'desc' => '梅花J', 'type' => 3, 'photo' => ''],
        ['id' => 38, 'value' => 12, 'desc' => '梅花Q', 'type' => 3, 'photo' => ''],
        ['id' => 39, 'value' => 13, 'desc' => '梅花K', 'type' => 3, 'photo' => ''],
        ['id' => 40, 'value' => 1, 'desc' => '方块A', 'type' => 4, 'photo' => ''],
        ['id' => 41, 'value' => 2, 'desc' => '方块2', 'type' => 4, 'photo' => ''],
        ['id' => 42, 'value' => 3, 'desc' => '方块3', 'type' => 4, 'photo' => ''],
        ['id' => 43, 'value' => 4, 'desc' => '方块4', 'type' => 4, 'photo' => ''],
        ['id' => 44, 'value' => 5, 'desc' => '方块5', 'type' => 4, 'photo' => ''],
        ['id' => 45, 'value' => 6, 'desc' => '方块6', 'type' => 4, 'photo' => ''],
        ['id' => 46, 'value' => 7, 'desc' => '方块7', 'type' => 4, 'photo' => ''],
        ['id' => 47, 'value' => 8, 'desc' => '方块8', 'type' => 4, 'photo' => ''],
        ['id' => 48, 'value' => 9, 'desc' => '方块9', 'type' => 4, 'photo' => ''],
        ['id' => 49, 'value' => 10, 'desc' => '方块10', 'type' => 4, 'photo' => ''],
        ['id' => 50, 'value' => 11, 'desc' => '方块J', 'type' => 4, 'photo' => ''],
        ['id' => 51, 'value' => 12, 'desc' => '方块Q', 'type' => 4, 'photo' => ''],
        ['id' => 52, 'value' => 13, 'desc' => '方块K', 'type' => 4, 'photo' => ''],
    ];

    private $_niuLevel = [
        '没牛',
        [1 => '牛一', 2 => '牛二', 3 => '牛三', 4 => '牛四', 5 => '牛五', 6 => '牛六'],
        '牛七',
        '牛八',
        '牛九',
        '牛牛',
        '顺子',
        '同花',
        '顺子牛牛',
        '同花牛牛',
        '葫芦牛牛',
        '四花牛',
        '五花牛',
        '五小牛',
        '同花顺',
        '炸弹',
        '同花顺牛牛',
    ];

    /**
     * 发牌
     * @param array $users
     * @return array
     */
    public function deal(array $users)
    {
        $pokers = [];
        for ($i = 0; $i < 5; $i++) {
            foreach ($users as $user) {
                $pokers[$user]['poker'][] = $this->getFirstPoker();
            }
        }
        foreach ($pokers as $key => $poker) {
            $allValues = array_column($poker['poker'], 'value');
            $allTypes = array_column($poker['poker'], 'type');
            $maxValue = max($allValues);
            $type = 4;
            foreach ($poker['poker'] as $item) {
                if ($item['value'] == $maxValue && $item['type'] <= $type) {
                    $type = $item['type'];
                }
            }
            $value = $this->countValue($allValues, $allTypes, $maxValue, $type);
            $pokers[$key]['value'] = $value['value'];
            $pokers[$key]['desc'] = $this->getNiuDescribe($value['level'],$value['niu']);
        }
        $this->cashRoomPokers($pokers);
        return $pokers;
    }


    /**
     * 计算牌大小
     * @param array $allValues
     * @param $allTypes
     * @param $maxValue
     * @param $type
     * @return array
     */
    public function countValue(array $allValues, $allTypes, $maxValue, $type)
    {
        $more10s = 0;
        $up10s = 0;
        $data = [
            'level' => 0,
            'value' => 0,
            'niu'   => 10,
        ];
        $same = 0;
        $isHulu = false;
        asort($allValues);
        $allValues = array_values($allValues);
        $sameValue = $allValues[0];
        $isNiuNiu = $this->isNiuniu($allValues);
        $sameType = true;
        $typeValue = $allTypes[0];
        foreach ($allTypes as $alltype) {
            if ($typeValue != $alltype) {
                $sameType = false;
                break;
            }
        }
        $isShunzi = $allValues[0] == $allValues[1] + 1 && $allValues[0] == $allValues[2] + 2 && $allValues[0] == $allValues[3] + 3 && ($allValues[0] == $allValues[4] + 4 || ($allValues[0] == $allValues[4] + 12 && $allValues == 13));
        if ($isNiuNiu === true && $sameType && $isShunzi) {
            $data['level'] = 16;//同花顺牛牛
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
            return $data;
        } elseif ($isNiuNiu === true && $sameType) {
            $data['level'] = 9;//同花牛牛
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
            return $data;
        } elseif ($isNiuNiu === true && $isShunzi) {
            $data['level'] = 8;//顺子牛牛
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
            return $data;
        } elseif ($sameType && $isShunzi) {
            $data['level'] = 14;
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
            return $data;
        } elseif ($sameType) {
            $data['level'] = 7;
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
            return $data;
        } elseif ($isShunzi) {
            $data['level'] = 6;
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
            return $data;
        }
        foreach ($allValues as $value) {
            if ($value == $sameValue) {
                $same++;
            } else {
                $sameValue = $value;
            }
            if ($value >= 10) {
                $up10s++;
                $more10s = $value > 10 ? $more10s + 1 : $more10s;
            }
        }
        if ($same == 4) {
            $data['level'] = 15;//炸弹
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
            return $data;
        } elseif ($same == 3) {
            if ($allValues[0] == $sameValue[1]) {
                $isHulu = $allValues[3] == $allValues[4];
            }
        }
        if ($isNiuNiu === true) {
            if ($isHulu) {
                $data['level'] = 10;//葫芦牛牛
            } elseif ($up10s == 5) {
                if ($more10s == 5) {
                    $data['level'] = 14;//五花牛
                } elseif ($more10s == 4) {
                    $data['level'] = 13;//四花牛
                } else {
                    $data['level'] = 5;//牛牛
                }
            } elseif (max($allValues) <= 5) {
                $data['level'] = 13;
            }else{
                $data['level'] = 5;//牛牛
            }
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
            return $data;
        }
        $niu = $this->haveNiu($allValues);
        if ($niu === false) {
            $data['level'] = 0;
            $data['niu'] = 0;
            $data['value'] = $maxValue + 4 - $type;
        } else {
            $data['niu'] = $niu;
            if ($niu < 7) {
                $data['level'] = 1;
            } elseif ($niu == 7) {
                $data['level'] = 2;
            } elseif ($niu == 8) {
                $data['level'] = 3;
            } elseif ($niu == 9) {
                $data['level'] = 4;
            }
            $data['value'] = $maxValue * $data['level'] * 10 + 4 - $type;
        }
        return $data;
    }

    /**
     * 是否牛牛
     * @param array $allValues
     * @return bool
     */
    public function isNiuniu(array $allValues)
    {
        $count = 0;
        foreach ($allValues as $value){
            $count += $value>10?10:$value;
        }
        $isNiuniu = $count % 10 == 0;
        if (!$isNiuniu) {
            return false;
        }
        if ($this->haveNiu($allValues) === 10) {
            return true;
        }
        return false;
    }


    /**
     * 牛几
     * @param array $allValues
     * @return bool|int
     */
    public function haveNiu(array $allValues)
    {
        foreach ($allValues as $key => $value) {
            if ($key + 2 > 4) {
                return false;
            }
            for ($i = $key + 1; $i < 5; $i++) {
                for ($j = $i + 1; $j < 5; $j++) {
                    $INum = $allValues[$i] > 10 ? 10 : $allValues[$i];
                    $JNum = $allValues[$j] > 10 ? 10 : $allValues[$j];
                    if (($value + $INum + $JNum) % 10 == 0) {
                        unset($allValues[$key]);
                        unset($allValues[$i]);
                        unset($allValues[$j]);
                        $total = 0;
                        foreach ($allValues as $newValue) {
                            $total += $newValue > 10 ? 10 : $newValue;
                        }
                        $niu = $total % 10;
                        $niu = $niu == 0 ? 10 : $niu;
                        return $niu;
                    }
                }
            }
        }
        return false;
    }

    /**
     * 获取描述
     * @param $level
     * @param int $k
     * @return mixed
     */
    public function getNiuDescribe($level, $k = 0)
    {
        if ($level == 1) {
            return $this->_niuLevel[$level][$k];
        }
        return $this->_niuLevel[$level];
    }

}