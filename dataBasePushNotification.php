<?php

date_default_timezone_set("UTC");
    
$todays_date = date('d-m-Y');

//my_api_key to be replaced by the actual key
$didier = "my_api_key@api.pushover.net";


$blueWithRedDisk = array(3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 2);
$redDisk = array(1602, 1603, 1604, 1605, 1606, 1607, 1608, 1609, 1610, 1611, 1612, 1613, 1701, 1702);
$blueDisk = array(4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 1);
$tdb = array("TDB # 996-145-577", "TDB # 996-145-578", "TDB # 996-145-579", "TDB # 996-145-580", "TDB # 996-145-581", "TDB # 996-145-582");

$items = count($blueWithRedDisk);
$items2 = count($blueDisk);
$items3 = count($tdb);

for ($i = 0; $i < $items; $i++) {
    
    $GLOBALS["blueWithRedDisk"];
    $GLOBALS["redDisk"];
    $subject = "Blue and Red disk up-date";
    $message = "Blue disk # " . $blueWithRedDisk[$i] . " and Red disk cycle " . $redDisk[$i] . " are available for download at:\n\nhttps://inds.epicinds.com/epic/login";
    
    if($todays_date == '27-01-2016' && $i == 0){
        sendMail();
    } else if ($todays_date == '24-02-2016' && $i == 1) {
        sendMail();
    } else if ($todays_date == '23-03-2016' && $i == 2) {
        sendMail();
    } else if ($todays_date == '20-04-2016' && $i == 3) {
        sendMail();
    } else if ($todays_date == '18-05-2016' && $i == 4) {
        sendMail();
    } else if ($todays_date == '15-06-2016' && $i == 5) {
        sendMail();
    } else if ($todays_date == '13-07-2016' && $i == 6) {
        sendMail();
    } else if ($todays_date == '10-08-2016' && $i == 7) {
        sendMail();
    } else if ($todays_date == '07-09-2016' && $i == 8 || $todays_date == '7-09-2016' && $i == 8) {
        sendMail();
    } else if ($todays_date == '05-10-2016' && $i == 9 || $todays_date == '5-10-2016' && $i == 9) {
        sendMail();
    } else if ($todays_date == '02-11-2016' && $i == 10 || $todays_date == '2-11-2016' && $i == 10) {
        sendMail();
    } else if ($todays_date == '30-11-2016' && $i == 11) {
        sendMail();
    } else if ($todays_date == '28-12-2016' && $i == 12) {
        sendMail();
    } else if ($todays_date == '25-01-2017' && $i == 13) {
        sendMail();
    }   
}

        
for ($x = 0; $x < $items2; $x++) {
    
    $GLOBALS["blueDisk"];
    $subject2 = "Blue disk up-date";
    $message2 = "Blue disk # " . $blueDisk[$x] . " is available for download at:\n\nhttps://inds.epicinds.com/epic/login";
    
    if ($todays_date == '10-02-2016' && $x == 0) {
        sendMail2();
    } else if ($todays_date == '09-03-2016' && $x == 1 || $todays_date == '9-03-2016' && $x == 1) {
        sendMail2();
    } else if ($todays_date == '06-04-2016' && $x == 2 || $todays_date == '6-04-2016' && $x == 2) {
        sendMail2();
    } else if ($todays_date == '04-05-2016' && $x == 3 || $todays_date == '4-05-2016' && $x == 3) {
        sendMail2();
    } else if ($todays_date == '01-06-2016' && $x == 4 || $todays_date == '1-06-2016' && $x == 4) {
        sendMail2();
    } else if ($todays_date == '29-06-2016' && $x == 5) {
        sendMail2();
    } else if ($todays_date == '27-07-2016' && $x == 6) {
        sendMail2();
    } else if ($todays_date == '24-08-2016' && $x == 7) {
        sendMail2();
    } else if ($todays_date == '21-09-2016' && $x == 8) {
        sendMail2();
    } else if ($todays_date == '19-10-2016' && $x == 9) {
        sendMail2();
    } else if ($todays_date == '16-11-2016' && $x == 10) {
        sendMail2();
    } else if ($todays_date == '14-12-2016' && $x == 11) {
        sendMail2();
    } else if ($todays_date == '11-01-2017' && $x == 12) {
        sendMail2();
    }
}

for ($y = 0; $y < $items3; $y++) {
    
    $GLOBALS["tdb"];
    $subject3 = "Terrain database up-date";
    $message3 = $tdb[$y] . " is available for download at:\n\nhttps://inds.epicinds.com/epic/login";
    
    if ($todays_date == "24-02-2016" && $y == 0) {
        sendMail3();
    } else if ($todays_date == "20-04-2016" && $y == 1) {
        sendMail3();
    } else if ($todays_date == "15-06-2016" && $y == 2) {
        sendMail3();
    } else if ($todays_date == "08-08-2016" && $y == 3 || $todays_date == "8-08-2016" && $y == 3) {
        sendMail3();
    } else if ($todays_date == "05-10-2016" && $y == 4 || $todays_date == "5-10-2016" && $y == 4) {
        sendMail3();
    } else if ($todays_date == "30-11-2016" && $y == 5) {
        sendMail3();
    }
}

function sendMail(){
    mail($GLOBALS["didier"], $GLOBALS["subject"], $GLOBALS["message"]);
}

function sendMail2(){
    mail($GLOBALS["didier"], $GLOBALS["subject2"], $GLOBALS["message2"]);
}

function sendMail3(){
    mail($GLOBALS["didier"], $GLOBALS["subject3"], $GLOBALS["message3"]);
}
