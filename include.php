<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 2018/5/22
 * Time: 10:53
 */
//set_include_path("123/");
//set_include_path(get_include_path().PATH_SEPARATOR . "123/");
//set_include_path(get_include_path().PATH_SEPARATOR . "app/");


set_include_path( implode( PATH_SEPARATOR , array(
    "123","app"
) ) );

include("test.php");
include ("test1.php");