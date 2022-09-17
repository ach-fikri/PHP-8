<?php

/**
 * union type yaitu kita dapat menentukan beberapa type ke dalam 1 vareabel
 */
class Example
{
    public string | int |bool|array $data;
}

$example = new Example();
$example->data = "Fikri";
$example->data = 10;
$example->data = true;
$example->data = [];


function sampleFunction(string|array $data): string | array
{
    if (is_array($data)){
        return["Array"];
    }elseif (is_string($data)){
      return "string";
    }
}

var_dump(sampleFunction("fikri"));
var_dump(sampleFunction([]));