<?php


namespace App\Observer;

class ConcreteSubject implements SubjectInterface
{
    /**
     * @var ObserverInterface[]
     */
    private $listeners;

    private $num = 0;

    public function addObserver(ObserverInterface $listener): self
    {
        $this->listeners[get_class($listener)] = $listener;
        return $this;
    }

    public function removeObserver(ObserverInterface $listener): void
    {
        unset($this->listeners[get_class($listener)]);
    }

    public function notifyObserver(): void
    {
        foreach ($this->listeners as $listener) {
            $listener->execute($this);
        }
    }

    public function incrementNum(): void
    {
        $this->num++;
        $this->notifyObserver();
    }

    public function getNum(): int
    {
        return $this->num;
    }
}
