<?php

include_once "vendor/autoload.php";

$stringCalc = new ChrisKonnertz\StringCalc\StringCalc();

$term = $_POST['string_calculate'];

$result = $stringCalc->calculate($term); // $result will contain 3


echo "<br />";

echo $result;

echo "<br />";


