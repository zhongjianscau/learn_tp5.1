<?php
/**
 * Created by PhpStorm.
 * User: zhongjian
 * Date: 2018-09-30
 * Time: 13:52:16
 */
namespace app\index\controller;

use think\Request;

class RequestConstruct
{
    protected $request;

    /**
     * 构造方法
     * RequestConstruct constructor.
     * @param Request $request Request对象
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        echo $this->request->host();
        echo $this->request->port();
        echo $this->request->route('name');
    }
}
