<?php
use Env\Get;

function env(string $var_name){
    return (new Get())->get($var_name);
}