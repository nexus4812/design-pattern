<?php


namespace App\Observer;

use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function test_observer()
    {
        $subject = new ConcreteSubject();

        $subject
            ->addObserver(new EvenObserver())
            ->addObserver(new OddObserver());

        foreach ([1,2,3,4,5,6,7,8,9] as $c) {
            $subject->incrementNum();
        }
    }
}
