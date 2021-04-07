<?php

use Lisovskaya\MyLog;
use Lisovskaya\LisovskayaException;
use Lisovskaya\QvaEquation;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "Lisovskaya/MyLog.php";
include "Lisovskaya/Equation.php";
include "Lisovskaya/QvaEquation.php";
include "Lisovskaya/LisovskayaException.php";

ini_set("display_errors", 1);
error_reporting(-1);

try {

    $values = array();

    for ($i = 1; $i < 4; $i++) {
        echo "Введите " . $i . " аргумент: ";
        $values[] = readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение " . $va . "x^2 + " . $vb . "x + " . $vc . " = 0");

    $b = new QvaEquation();
    $x = $b->solve($va, $vb, $vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: " . $str);
} catch (LisovskayaException $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();

?>
