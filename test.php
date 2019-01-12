<?php
//namespace email;

require './vendor/autoload.php';
class test{
    public function index()
    {
        $email = new \Make\MeEmail\BsEmail();
        $email::qq()->config(['a'=>1,'b'=>4]);

    }
}

$testObj = new test();
$testObj->index();
?>