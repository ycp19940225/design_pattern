<?php

namespace App\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        echo get_class($subject) .':changed';
    }
}