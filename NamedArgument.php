<?php

function sayHello(string $first, string $middle = "", string $last) :void
{
    echo "Helo $first $middle $last".PHP_EOL;
}
//tidak menggunakan named argument
sayHello("Ach", "Fikri", "Rina");
//sayHello("ach", "Fikri"); Error

//menggunakan named argument
sayHello(last: "rina", first: "Ach", middle: "Fikri");
sayHello(first: "Ach", last: "Fikri");
