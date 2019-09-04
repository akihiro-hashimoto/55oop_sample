<?php

// ピカチュウの設計図が書かれたファイルの読み込み
require_once('Pikachu.php');

// ピカチュウの設計図をもとに、実体を作成
// インスタンス化 ( new クラス名() )
$pikachu1 = new Pikachu(10, 40);

// クラスをもとに作ったピカチュウの操作
// プロパティとかメソッドの使い方

// ピカチュウ1にHP100に設定する
$pikachu1->hp = 100;

// ピカチュウ1にMP50に設定する
$pikachu1->mp = 50;

// 画面にピカチュウのHPとMPを表示
echo 'ピカチュウのHPは';
echo $pikachu1->hp;
echo '<br>';

echo 'ピカチュウのMPは';
echo $pikachu1->mp;
echo '<br>';

// メソッド（振る舞い）実行
// サンダーボルトの実行
$pikachu1->thunderVolt();

// アイアンテールの実行
$pikachu1->ironTail();


$pikachu2 = new Pikachu(400, 10);
$pikachu2->hp = 500;
$pikachu2->mp = 1500;

echo 'ピカチュウ1のHPは';
echo $pikachu1->hp;

echo '<br>';
echo '<br>';

echo 'ピカチュウ2のHPは';
echo $pikachu2->hp;

echo '<br>';
echo '<br>';

require_once('Lizardon.php');

$Lizardon = new Lizardon();

$Lizardon->hp = 360;

$Lizardon->pp = 15;

echo 'リザードンのHPは';
echo $Lizardon->hp;
echo '<br>';

echo 'リザードンのPPは';
echo $Lizardon->pp;
echo '<br>';

$Lizardon->FireBlast();

$Lizardon->Flamethrower();

$Lizardon->Slash();

$Lizardon->SeismicToss();

echo '<br>';

// ピカチュウ３の作成
$pikachu3 = new Pikachu(10, 40);

echo 'ピカチュウ3のHPは';
echo $pikachu3->hp;




