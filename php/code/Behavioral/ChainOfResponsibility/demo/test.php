<?php
namespace App\Behavioral\ChainOfResponsibility\demo;

abstract class AHandler

{

    protected $nextHandler = null;



    public function setNext (AHandler $handler)

    {

        $this->nextHandler = $handler;

    }



    abstract public function handler ();

}

class Handler1 extends AHandler

{

    public function handler()

    {

        $handled = false;



        // 处理请求

        echo 'Handler1接受到了请求' . PHP_EOL;



        if (!$handled && $this->nextHandler) {

            $this->nextHandler->handler();

        }

    }

}

class Handler2 extends AHandler

{

    public function handler()

    {

        $handled = false;



        // 处理请求

        echo 'Handler2接受到了请求' . PHP_EOL;



        if (!$handled && $this->nextHandler) {

            $this->nextHandler->handler();

        }

    }

}

class Handler3 extends AHandler

{

    public function handler()

    {

        $handled = false;


        // 处理请求

        echo 'Handler3接受到了请求' . PHP_EOL;



        if (!$handled && $this->nextHandler) {

            $this->nextHandler->handler();

        }

    }

}

$handler1 = new Handler1();

$handler2 = new Handler2();

$handler3 = new Handler3();

$handler1->setNext($handler2);

$handler2->setNext($handler3);



//$handler1->handler();


class test{
    public $handler;

}

