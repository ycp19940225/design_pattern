<?php

namespace App\structural_mode\Dependency;

class ArrayConfig extends AbstractConfig implements Parameters
{

    public function get($key, $default = '')
    {
        if(!empty($this->storage[$key])){
            return $this->storage[$key];
        }else{
            return $default;
        }
    }

    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }
}