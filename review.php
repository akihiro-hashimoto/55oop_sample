<?php

// 関数名： echoHello
// 処理：画面に"Hello"と出力
function echoHello($echoHello) {
    echo $echoHello;
}

echoHello('Hello');

// echoHelloを実行

echo '<br>';

// 関数名： echoUserName
// 引数：名前
// 処理：「私は〇〇です」を出力する

function echoUserName($echoUserName) {
    echo "私は".$echoUserName."です";
}

echoUserName("ガンダム");

// echoUserNameを実行

