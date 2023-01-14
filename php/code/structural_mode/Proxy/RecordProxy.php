<?php

namespace App\structural_mode\Proxy;

class RecordProxy extends Record
{
    /**
     * @var bool
     */
    private $isInitialized;
    /**
     * @var bool
     */
    private $isDirty;

    public function __construct($data = null)
    {
        parent::__construct($data);
        if(null != $data){
            $this->isInitialized = true;
            $this->isDirty = true;
        }
    }

    public function __set($name, $value)
    {
            $this->isDirty = true;
            parent::__set($name, $value);
    }

}