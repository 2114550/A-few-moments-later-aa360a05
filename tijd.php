<?php
$time = readline();
$alltimes = explode(" ", $time);

$all = 0;
$days = 0;
$hours = 0;
$minutes = 0;
$seconds = 0;

foreach ($alltimes as $count){
    $timesetting = substr($count, -1);
    switch ($timesetting) {
        case "d":
            $days = (int)$count*24*60*60;
            break;
        case "h":
            $hours = (int)$count*60*60;
            break;
        case "m":
            $minutes = (int)$count*60;
            break;
        case "s":
            $seconds = (int)$count;
            break;
}
}
$all = $days + $hours + $minutes + $seconds;
echo "$all seconden". PHP_EOL;
