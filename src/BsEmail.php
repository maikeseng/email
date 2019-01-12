<?php
namespace Make\MeEmail;

use Make\MeEmail\qqemail\QqEmail;

class BsEmail
{
  /**
   *  加载邮件配置信息
   */
//  public static function config($config = [])
//  {
//
//    print_r($config);
//    echo "这是配置信息";
//
//  }

  /**
   * 这是qq邮件
   */
  public static function qq()
  {
    echo 'qq类';
    //return 'qq类';
    //return new QqEmail();
     return new QqEmail();
  }

  /**
   * 这是网易邮箱
   */
  public static function WangYi()
  {
    return '网易类';
    //return new WangYiEmail();
  }

  /**
   * 这是smtp邮箱
   */
  public static function Smtp()
  {
    return 'Smtp类';
    //return new SmtpEmail();
  }

  
}
?>
