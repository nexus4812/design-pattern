<?php


namespace App\Observer;

class EvenObserver implements ObserverInterface
{
    public function execute(ConcreteSubject $subject): void
    {
        if ($subject->getNum() % 2 === 0) {
            echo($subject->getNum().' is Even Num !!'. PHP_EOL);
        }
    }
}
