<?php
namespace email;

//require './vendor/autoload.php';
class test{
    public function index()
    {
        $email = new BsEmail();
        //$email::qq()->config(['a'=>1,'b'=>4]);
        $res = $email::qq()->test();
        var_dump($res);
    }
}

$testObj = new test();
$testObj->index();
?>