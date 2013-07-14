<?php

$fruits[0] = "bananas";
$fruits[1] = "strawberries";
$fruits[3] = "apples";
$fruits[4] = "grapes";
$fruits[5] = "peaches";

foreach ($fruits as $fruit)
  {
  echo $fruit . "<br>";
  }


$fruitColors['bananas'] = "yellow";
$fruitColors['strawberries'] = "red" ;
$fruitColors['apples'] = "green";
$fruitColors['grapes'] = "green";
$fruitColors['peaches'] = "red";


foreach ($fruitColors as $fruit => $color)
  {
  echo $fruit ." ".$color. "<br>";
  }



?>
