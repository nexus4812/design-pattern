<?php


namespace App\Observer;

class OddObserver implements ObserverInterface
{
    public function execute(ConcreteSubject $subject): void
    {
        if ($subject->getNum() % 2 !== 0) {
            echo($subject->getNum().' is Odd Num !!'. PHP_EOL);
        }
    }
}
