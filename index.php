<?php

ini_set("display_errors", 1);
error_reporting (-1); 

require "core/EquationInterface.php";
require "core/LogAbstract.php";
require "core/LogInterface.php";

require "kuliev/KulievException.php";
require "kuliev/MyLog.php";
require "kuliev/LinearEquationSolver.php";
require "kuliev/Square.php";

MyLog::log("Program version: " . trim(file_get_contents("version")));

try {
    echo "Enter 3 parameters: " . PHP_EOL;
$a = readline();
$b = readline();
$c = readline();

$sqr = new Square();
    MyLog::log("The equation is: ". $a.'x^2 + '.$b.'x + '.$c.' = 0'. PHP_EOL);

    $res = $sqr->solve($a, $b, $c);

} catch (RuntimeException $e){
   MyLog::log("Error".$e->getMessage());
}
MyLog::write();