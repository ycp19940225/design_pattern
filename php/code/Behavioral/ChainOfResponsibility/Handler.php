<?php

namespace App\Behavioral\ChainOfResponsibility;

abstract class Handler
{
    private $successor;

    final public function append(Handler $handler)
    {
        if(is_null($this->successor)){
            $this->successor = $handler;
        }else{
            $this->successor->append($handler);
        }
    }

    final public function handle(Request $req)
    {
        $req->forDebugOnly = get_called_class();
        $processed = $this->processing($req);
        if (!$processed) {
            // the request has not been processed by this handler => see the next
            if (!is_null($this->successor)) {
                $processed = $this->successor->handle($req);
            }
        }

        return $processed;
    }

    /*
     * @return bool true if the request has been processed
     */
    abstract protected function processing(Request $request){}
}