<?php

class Aman{
    public static string $name = 'Aman';

    public function show(){
        echo self::$name;
        echo static::$name;
    }
}

class Kumar extends Aman
{
    public static string $name = 'Kumar';
}

$obj = new Kumar();

echo $obj->show();