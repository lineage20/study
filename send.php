<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 2018/9/1
 * Time: 15:22
 */

set_time_limit(0);
include_once('RabbitMQCommand.php');
$configs = array('host'=>'192.168.56.103','port'=>'5672','login'=>'hxb','password'=>'hxb','vhost'=>'/');
$exchange_name = 'class-e-1';
$queue_name = 'class-q-1';
$route_key = 'class-r-1';

//try{
//    $conn = new AMQPConnection($configs);
//    $conn->connect();
//} catch (AMQPConnectionException $ex) {
//    throw new Exception('cannot connection rabbitmq',500);
//}

//$cnn = new AMQPConnection($configs);
//
//if ($cnn->connect()) {
//    echo "Established a connection to the broker";
//}
//else {
//    echo "Cannot connect to the broker";
//}
//die;

//print_r($conn);die;

$ra = new RabbitMQCommand($configs,$exchange_name,$queue_name,$route_key);
for($i=0;$i<=100000;$i++){
    $ra->send(date('Y-m-d H:i:s',time()));
}
exit();