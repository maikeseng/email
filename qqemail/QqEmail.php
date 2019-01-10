<?php
/**
 * Created by PhpStorm.
 * User: bszx
 * Date: 2019/1/9
 * Time: 13:41
 */
namespace email\qqemail;

class QqEmail
{
    /**
     * 加载邮件配置信息
     * @param array $config
     */
    public function config($config = [])
    {
        echo "这是配置信息";
        print_r($config);
    }

    public function send($arr = [])
    {
        echo "这里是发送邮件的方法";
    }

    public function test()
    {
        return '测试ok';
    }

}