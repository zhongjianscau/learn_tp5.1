<?php
/**
 * Created by PhpStorm.
 * User: zhongjian
 * Date: 2018-09-30
 * Time: 13:56:49
 */
namespace app\index\controller;

class RequestAction
{
    public function index()
    {
        return request()->param('name');
    }
}
