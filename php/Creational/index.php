<?php

include "hello.php";
include "Korean.php";
include "factory.php";
include "English.php";


$obj = new hello;

// $obj = new Hello;
echo $obj->greeting("en")."\n";
echo $obj->greeting("ko")."\n";


//korean객체와 의존성을 갖는다.