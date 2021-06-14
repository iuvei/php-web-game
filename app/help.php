<?php


function SSC($code)
{
 
    if($code == 1)
    {
        $arr = [5,7,9];
    }
    if($code == 2)
    {
        $arr = [6,8];
        
    }
    if($code == 3)
    {
        $arr = [1,3];

    }
    if($code == 4)
    {
        $arr = [0,2,4];
    }
    
    $rand = $arr[array_rand($arr)];
    return $rand . ',' . rand(0,9) . ',' . rand(0,9) . ',' . rand(0,9) . ',' . rand(0,9);
}

function KC($code)
{
    if($code == 1)
    {
        $n1 = [7,9];
        $n1 = $n1[array_rand($n1)];
        $n2 = [1,2,3,4,5,6,8,10];
        shuffle($n2);
        array_unshift($n2,$n1);
        $n2[] = $n1 == 7 ? 7 : 9;
        $array = $n2;
    }
    if($code == 2)
    {
        $n1 = [6,8,10];
        $n2 = [1,2,3,4,5,7,9];
        shuffle($n1);
        shuffle($n2);
        $array = array_merge($n1,$n2);
    }
    if($code == 3)
    {
        $n1 = [1,3,5];
        $n2 = [6,2,8,4,5,7,9,10];
        shuffle($n1);
        shuffle($n2);
        $array = array_merge($n1,$n2);
    }
    if($code == 4)
    {
        $n1 = [2,4];
        $n2 = [1,3,5,6,7,8,9,10];
        shuffle($n1);
        shuffle($n2);
        $array = array_merge($n1,$n2);
    }
    
    return implode(',', $array);
}

function k3($code)
{
    while (true)
    {
        $n1 = rand(1,6);
        $n2 = rand(1,6);
        $n3 = rand(1,6);
        $num = $n1 + $n2 + $n3;
        if($code == 1 && $num > 10 && $num % 2 != 0)
        {
            break;
        }
        if($code == 2 && $num > 10 && $num % 2 == 0)
        {
            break;
        }
        if($code == 3 && $num <= 10 && $num % 2 != 0)
        {
            break;
        }
        if($code == 4 && $num <= 10 && $num % 2 == 0)
        {
            break;
        }
    }
    return $n1 . ',' . $n2 . ',' . $n3;
}


function strToArray($code)
{
    return explode(',', $code);
}

/**
 *  大小
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function daxiao($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = array_sum($open_code);

    if(($num > 10 && $order['content'] == '大') || ($num <= 10 && $order['content'] == '小'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}

/**
 *  时时彩大小
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function sscdaxiao($order,$open_code)
{
    $num = (int)$open_code[0];

    if(($num > 4 && $order['content'] == '大') || ($num <= 4 && $order['content'] == '小'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}



/**
 *  快车大小
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function kcdaxiao($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = $open_code[0] + $open_code[1];

    if(($num > 11 && $order['content'] == '大') || ($num <= 11 && $order['content'] == '小'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}


/**
 *  快车冠军大小
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function gjdaxiao($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = $open_code[0];

    if(($num > 5 && $order['content'] == '大') || ($num <= 5 && $order['content'] == '小'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}

/**
 *  单双
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function danshuang($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = array_sum($open_code);

    if(($num % 2 !==0 && $order['content'] === '单') || ($num % 2 === 0 && $order['content'] === '双'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}

/**
 *  龙虎和1VS5
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function ssclonghu($order,$open_code)
{
    $open_code = strToArray($open_code);
    $code_1 = (int)$open_code[0];
    $code_4 = (int)$open_code[4];
    if($code_1 > $code_4) $code = '龙';
    if($code_1 < $code_4) $code = '虎';
    if($code_1 == $code_4) $code = '和';
    if($code == $order['content'])
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}



/**
 *  单双
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function sscdanshuang($order,$open_code)
{
    $num = (int)$open_code[0];

    if(($num % 2 !==0 && $order['content'] === '单') || ($num % 2 === 0 && $order['content'] === '双'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}

/**
 *  快车单双
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function kcdanshuang($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = $open_code[0] + $open_code[1];

    if(($num % 2 !==0 && $order['content'] === '单') || ($num % 2 === 0 && $order['content'] === '双'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}


/**
 *  快车冠军单双
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function gjdanshuang($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = $open_code[0];

    if(($num % 2 !==0 && $order['content'] === '单') || ($num % 2 === 0 && $order['content'] === '双'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}

/**
 *  总和玩法
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function zonghe($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = array_sum($open_code);

    if($num == $order['content'])
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;

}


/**
 *  快车和值玩法
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function kchezhi($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = $open_code[0] + $open_code[1];

    if($num == $order['content'])
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;

}


/**
 *  快车冠军数值玩法
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function gjshuzhi($order,$open_code)
{
    $open_code = strToArray($open_code);
    $num = $open_code[0];

    if($num == $order['content'])
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;

}


/**
 * 单筛
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function danshai($order,$open_code)
{
    $open_code = strToArray($open_code);
    $open_code = array_count_values($open_code);
    if(!empty($open_code[$order['content']]))
    {
        $num = $open_code[$order['content']];
        return round($order['money'] * $order['rate'] * $num ,2);
    }
    return 0;
}


/**
 * 5中1
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function sscdanshai($order,$open_code)
{
    $open_code = strToArray($open_code);

    if(in_array($order['content'],$open_code))
    {
        return round($order['money'] * $order['rate'] ,2);
    }
    return 0;
}



/**
 *  对子
 * @param $order
 * @param $open_code
 * @return false|float|int
 */
function duizi($order,$open_code)
{
    $open_code = strToArray($open_code);
    $open_code = array_count_values($open_code);
    if(!empty($open_code[$order['content']]) && $open_code[$order['content']] > 1)
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;
}

function baozi($order,$open_code)
{
    $open_code = strToArray($open_code);
    $code = array_count_values($open_code);
    $code = array_values($code);
    $content = $order['content'];

    if($code[0] == 3  && (in_array($content, $open_code) || $content == '全围'))
    {
        return round($order['money'] * $order['rate'],2);
    }
    return 0;

}

function createOrderOn()
{
    $prefix = date('Ymd');
    // 随机生成 6 位的数字，并创建订单号
    $no = $prefix . rand(100000, 999999) . substr(microtime(true),-4);
    return $no;
}



function userAccountChange($user_id, $type, $before_money, $money, $after_money, $remark)
{
    $insert = [
        'user_id'      => $user_id,
        'type'         => $type,
        'before_money' => $before_money,
        'money'        => $money,
        'after_money'  => $after_money,
        'remark'       => $remark,
    ];

    $res = \App\Models\UsersAccountChange::create($insert);
    return $res;
}

