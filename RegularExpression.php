<?php

$matches = [];
$result = preg_match_all("/jo|di|slebew/i", "Jodi natan Karo karo", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsad/i", "***", "dasar lu anjing, bangsad");
var_dump($result);

$result = preg_split("/[\s,-]/", "Jodi Jonatan,Karo-karo");
var_dump($result);