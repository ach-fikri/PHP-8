<?php

function sayHello(?string $name){
    if ($name == null){
        throw new Exception("Tidak boleh null");
    }

    echo "Hello $name".PHP_EOL;
}


function sayaHelloExpression(?string $name){
    $result = $name != null ? "Hello $name" : throw new Exception("Tidak boleh null");
    echo "Hello $name".PHP_EOL;
}
sayaHelloExpression("fikri");
sayaHelloExpression(null);
