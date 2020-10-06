<?php


namespace App\Observer;

interface SubjectInterface
{
    public function addObserver(ObserverInterface $listener);
    public function removeObserver(ObserverInterface $listener):void ;
    public function notifyObserver():void ;
}
