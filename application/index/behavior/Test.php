<?php
/**
 * Created by PhpStorm.
 * User: zhongjian
 * Date: 2018-09-29
 * Time: 15:18:51
 */
namespace app\index\behavior;

class Test
{
    public function run($params)
    {
        echo '行为执行，传入的参数如下：' . json_encode($params);
        return false;
    }
}
