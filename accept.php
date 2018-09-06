<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 2018/9/1
 * Time: 15:23
 */

error_reporting(0);
include_once('RabbitMQCommand.php');
$configs = array('host'=>'192.168.56.103','port'=>5672,'login'=>'hxb','password'=>'hxb','vhost'=>'/');
$exchange_name = 'class-e-1';
$queue_name = 'class-q-1';
$route_key = 'class-r-1';
$ra = new RabbitMQCommand($configs,$exchange_name,$queue_name,$route_key);
class A{
    function processMessage($envelope, $queue) {
        $msg = $envelope->getBody();
        print_r($msg);
        $envelopeID = $envelope->getDeliveryTag();
        $pid = posix_getpid();
        file_put_contents("log.txt", $msg.'|'.$envelopeID.''."\r\n",FILE_APPEND);
        $queue->ack($envelopeID);
    }
}
$a = new A();
$s = $ra->run(array($a,'processMessage'),false);