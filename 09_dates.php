<?php
date_default_timezone_set("Asia/Dhaka");
// Print current timestamp
echo time() . '<br>';
// Print current date
echo date('Y-m-d H:i:s') . '<br>';
// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';
// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y,H:i:s') . '<br>';
// String to timestamp
echo strtotime('+1 week') . '<br>';
// Parse date: https://www.php.net/manual/en/function.date-parse.php
// $dateString = '2023-02-05 11:45:34';
// $parseDate = date_parse($dateString);
// echo '<pre>';
// var_dump($parseDate);
// echo '</pre>';
// Parse date from format
$dateString = 'February 4 2023 11:03:12'; //with non-default formate
$parseDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parseDate);
echo '</pre>';
// https://www.php.net/manual/en/function.date-parse-from-format.php
