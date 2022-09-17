<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}
//cek dan mengembalikan null di php 7
function getCountry(?User $user) : ?string{
    if ($user != null){
        if ($user->address != null){
            return $user->address->country;
        }
    }
    return null;
}

echo  getCountry(null).PHP_EOL;

//di PHP 8

function getCountry1(?User $user) : ?string{

    return $user?->address?->country;
}

echo getCountry1(null);