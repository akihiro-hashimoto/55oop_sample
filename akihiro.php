<?php

class Akihiro 
{
    // 属性
    // - プログラミング力
    // - 英語力

    // 振る舞い：メソッドとも言う（関数）
    // - コードを書く
    // - 喋る

    // プログラミング力
    public $programming;

    // 英語力
    public $english;

    public function __construct($programming, $english) {
        echo 'akihiroは可能性を見つけた';
        echo '<br>';

        $this->programming = $programming;
        $this->english = $english;
    }

    // プログラムを書く
    function write()
    {
        echo 'プログラムを書いた';
        echo '<br>';
    }

    // 喋る
    function talk()
    {
        echo '英語を話した';
        echo '<br>';
    }
}