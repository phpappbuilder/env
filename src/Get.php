<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01.10.2018
 * Time: 4:20 PM
 */

namespace Env;


class Get
{
    private $file = './env.php';
    private $vars = [];
    public function __construct(){
        $this->vars = require ($this->file);
    }
    public function get(string $var){
        if (isset($this->vars[$var])){
            return $this->vars[$var];
        } else {
            throw new \Exception('Undefined env var');
        }
    }
}