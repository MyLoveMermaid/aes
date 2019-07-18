<?php

require_once(__DIR__.'/src/Aes.php');
use Kq\Aes;
$test = new Aes('key');

$en = $test->encrypt('hahaha');
echo $en;
$de = $test->decrypt($en);
echo $de;