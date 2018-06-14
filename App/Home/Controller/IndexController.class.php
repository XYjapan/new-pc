<?php
namespace Home\Controller;
use Think\Controller;
use Think\Log;
use Think\Route;

class IndexController extends Controller
{
    public function index()
    {
        dump( C() );
    }

    public function test()
    {
        $result     =   [
            'name'      =>  'Luke',
            'age'       =>  18,
            'sex'       =>  'male',
        ];

        $this->ajaxReturn( $result, 'xml' );
    }
}