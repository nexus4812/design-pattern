<?php


namespace App\Observer;

interface ObserverInterface
{
    public function execute(ConcreteSubject $subject): void;
}
