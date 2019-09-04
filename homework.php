<?php

require_once('akihiro.php');

$akihiro = new Akihiro(30, 10);

echo 'akihiroのプログラミング力は';
echo $akihiro->programming;
echo '<br>';

echo 'akihiroの英語力は';
echo $akihiro->english;
echo '<br>';

$akihiro->write();

// アイアンテールの実行
$akihiro->talk();
