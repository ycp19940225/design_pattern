<?php

namespace App\structural_mode\Proxy;

class Record
{
    /**
     * @var mixed|null
     */
    protected $data;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public function __set($name, $value)
    {
        $this->data[strval($name)] = $value;
    }

    public function __get($name)
    {
        if(array_key_exists($name, $this->data)){
            return $this->data[strval($name)];
        }else{
            return null;
        }
    }
}