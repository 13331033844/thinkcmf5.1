<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-present http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Released under the MIT License.
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------

namespace app\test\controller;

use cmf\controller\HomeBaseController;
use think\facade\Db;
use thans\jwt\facade\JWTAuth;

class IndexController extends HomeBaseController
{
    public function index()
    {
        $list = Db::name('user')->select();
        print_r($list);
    }

}
