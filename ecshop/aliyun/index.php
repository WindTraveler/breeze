<?php
/**
 * Created by PhpStorm.
 * User: gyf
 * Date: 2018/4/14
 * Time: 17:35
 */

set_time_limit(0);
header('Content-Type: text/plain; charset=utf-8');

$response = Sms::sendSms();
echo "发送短信(sendSms)接口返回的结果:\n";
print_r($response);