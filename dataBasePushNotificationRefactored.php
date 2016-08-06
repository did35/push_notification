<?php

date_default_timezone_set("UTC"); 
$todays_date = date('d-m-Y');

// Example of using a push notification third party private key for your phone.
// Alternatively, you can use your crew member's email. Choice is yours...
$pilots = array("pilot1_private_key@api.pushover.net", "pilot2email@com");

$blueWithRedDisk = array(3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 2);
$redDisk = array(1602, 1603, 1604, 1605, 1606, 1607, 1608, 1609, 1610, 1611, 1612, 1613, 1701, 1702);
$blueDisk = array(4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 1);
$tdb = array("TDB # 996-145-577", "TDB # 996-145-578", "TDB # 996-145-579", "TDB # 996-145-580", "TDB # 996-145-581", "TDB # 996-145-582");

$datesBlueAndRed = array("27-01-2016", "24-02-2016", "23-03-2016", "20-04-2016", "18-05-2016", "15-06-2016", "13-07-2016", "10-08-2016", "07-09-2016", "05-10-2016", "02-11-2016", "30-11-2016", "28-12-2016", "25-01-2017");
$datesBlueDisk = array("10-02-2016", "09-03-2016", "06-04-2016", "04-05-2016", "01-06-2016", "29-06-2016", "27-07-2016", "24-08-2016", "21-09-2016", "19-10-2016", "16-11-2016", "14-12-2016", "11-01-2017");
$datesTerrainDataBase = array("24-02-2016", "20-04-2016", "15-06-2016", "08-08-2016", "05-10-2016", "30-11-2016");

if ($i = getIndex($todays_date, $datesBlueAndRed) > -1 ) {
    $message = "Blue disk #" . $blueWithRedDisk[$i] . "and Red dsk cycle" . $redDisk[$i] . "are available for download at:\n\nhttps://inds.epicinds.com/epic/login";
    sendMailToPilots ("Blue and Red disk up-date", $message, $pilots);
} else if ($i = getIndex($todays_date, $datesBlueDisk) > -1 ) {
    $message = "Blue disk #" . $blueDisk[$i] . "is available for download at:\n\nhttps://inds.epicinds.com/epic/login";
    sendMailToPilots("Blue disk up-date", $message, $pilots);
} else if ($i = getIndex($todays_date, $datesTerrainDataBase) > -1 ) {
    $message = $tdb[$i] . "is available for download at:\n\nhttps://inds.epicinds.com/epic/login";
    sendMailToPilots("Terrain database up-date", $message, $pilots);
}

function sendMailToPilots($subject, $message, $pilots) {
    for ($p = 0; $p < count($pilots); $p++) {
        mail($pilots[$p], $subject, $message);
    }
}

function getIndex($todays_date, $dates) {
    for ($i = 0; $i < count($dates); $i++) {
        if ($todays_date == $dates[$i]) {
            return $i;
            return -1;
        }
    }
}
?>