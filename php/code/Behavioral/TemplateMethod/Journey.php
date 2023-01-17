<?php

namespace App\Behavioral\TemplateMethod;

abstract class Journey
{
    final public function takeATrip(){
        $this->buyAFlight();
        $this->takePlane();
        $this->enjoyVacation();
        $this->buyGift();
        $this->takePlane();
    }

    abstract protected function enjoyVacation();

    private function takePlane()
    {
        echo "Taking the plane\n";
    }

    private function buyGift()
    {
    }

    private function buyAFlight()
    {
        echo "Buying a flight\n";
    }
}