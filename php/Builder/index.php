<?php

require "Builder.php";
require "Factory.php";


require "Memory.php";
require "Storage.php";
require "Algorism.php";
require "ProductModel.php";


$algorism = new ProductModel;

$factory = new Factory();

$factory->setAlgorism($algorism);

$computer = $factory->build()->getInstance();


echo $computer;