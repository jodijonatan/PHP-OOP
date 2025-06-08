<?php

$dateTime = new DateTime();
$dateTime->setDate(2009, 1, 24);
$dateTime->setTime(12, 43, 56);

// menambah 1 bulan
$dateTime->add(new DateInterval("P1M"));

// mengurangi 1 hari
$dateInterval = new DateInterval("P1D");
$dateInterval->invert = 1;
$dateTime->add($dateInterval);

var_dump($dateTime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("America/Los_Angeles"));
$zonaWaktu = $now->getTimezone()->getName();

var_dump($now);

echo "waktu saat ini di {$zonaWaktu}: {$now->format("Y-m-d H:i:s")}" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "1998-12-29 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format tidak valid";
}