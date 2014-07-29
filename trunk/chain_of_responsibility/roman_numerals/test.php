<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'ConverterRomanNumerals.class.php';
require_once 'Unit.class.php';
require_once 'Dozen.class.php';
require_once 'Hundred.class.php';
require_once 'Thousand.class.php';

$u = new Unit();

echo '0 - '. $u->convert(0) . '<br />';
echo '1 - '. $u->convert(1) . '<br />';
echo '2 - '. $u->convert(2) . '<br />';
echo '3 - '. $u->convert(3) . '<br />';
echo '5 - '. $u->convert(5) . '<br />';
echo '7 - '. $u->convert(7) . '<br />';
echo '9 - '. $u->convert(9) . '<br />';

echo '10 - '. $u->convert(10) . '<br />';
echo '20 - '. $u->convert(20) . '<br />';
echo '24 - '. $u->convert(24) . '<br />';
echo '26 - '. $u->convert(26) . '<br />';
echo '40 - '. $u->convert(40) . '<br />';
echo '50 - '. $u->convert(50) . '<br />';
echo '70 - '. $u->convert(70) . '<br />';
echo '90 - '. $u->convert(90) . '<br />';
echo '92 - '. $u->convert(92) . '<br />';
echo '94 - '. $u->convert(94) . '<br />';
echo '95 - '. $u->convert(95) . '<br />';
echo '99 - '. $u->convert(99) . '<br />';

echo '101 - '. $u->convert(101) . '<br />';
echo '111 - '. $u->convert(111) . '<br />';
echo '180 - '. $u->convert(180) . '<br />';
echo '500 - '. $u->convert(500) . '<br />';
echo '788 - '. $u->convert(788) . '<br />';
echo '960 - '. $u->convert(960) . '<br />';
echo '999 - '. $u->convert(999) . '<br />';

echo '1000 - '. $u->convert(1000) . '<br />';
echo '1001 - '. $u->convert(1001) . '<br />';
echo '1010 - '. $u->convert(1010) . '<br />';
echo '1130 - '. $u->convert(1130) . '<br />';
echo '1910 - '. $u->convert(1910) . '<br />';
echo '1910 - '. $u->convert(1910) . '<br />';
echo '1990 - '. $u->convert(1990) . '<br />';
echo '2000 - '. $u->convert(2000) . '<br />';
echo '2001 - '. $u->convert(2001) . '<br />';
echo '2100 - '. $u->convert(2100) . '<br />';
echo '2948 - '. $u->convert(2948) . '<br />';
echo '3000 - '. $u->convert(3000) . '<br />';
echo '3245 - '. $u->convert(3245) . '<br />';
echo '3343 - '. $u->convert(3343) . '<br />';
echo '3701 - '. $u->convert(3701) . '<br />';
echo '4000 - '. $u->convert(4000) . '<br />';
echo '4501 - '. $u->convert(4501) . '<br />';
echo '4892 - '. $u->convert(4892) . '<br />';
echo '5020 - '. $u->convert(5020) . '<br />';
echo '5999 - '. $u->convert(5999) . '<br />';
echo '6999 - '. $u->convert(6999) . '<br />';
echo '7999 - '. $u->convert(7999) . '<br />';
echo '10999 - '. $u->convert(10999) . '<br />';
echo '100000 - '. $u->convert(100000) . '<br />';
echo '114545 - '. $u->convert(114545) . '<br />';
echo '999999 - '. $u->convert(999999) . '<br />';