<?php
namespace Home\Controller;

use Course\Model\CourseModel;
use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $model          =   new CourseModel();
        $result         =   $model->lock(true)->select();
        dump( $model->getLastSql() );
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