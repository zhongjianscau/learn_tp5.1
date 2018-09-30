<?php
/**
 * Created by PhpStorm.
 * User: zhongjian
 * Date: 2018-09-29
 * Time: 15:49:30
 */
namespace app\index\behavior;

use think\Request;

class AppTest
{
    public function run(Request $request, $params)
    {
        echo 'AppTest行为类的操作：';
        dump($request->get());
        if (empty($params)) {
            echo '没传参数';
        } else {
            echo '传了参数';
        }
        return false;
    }
}
