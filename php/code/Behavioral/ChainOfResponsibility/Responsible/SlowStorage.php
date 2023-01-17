<?php

namespace App\Behavioral\ChainOfResponsibility\Responsible;

use App\Behavioral\ChainOfResponsibility\Handler;
use App\Behavioral\ChainOfResponsibility\Request;

class SlowStorage extends Handler
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    protected function processing(Request $request)
    {
        echo 'slow';
        if('get' == $request->verb){
            if (array_key_exists($request->key, $this->data)) {
                $request->response = $this->data[$request->key];
                return true;
            }
        }
        return false;
    }
}