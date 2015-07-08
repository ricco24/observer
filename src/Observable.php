<?php

namespace Kelemen\Observer;

interface Observable
{
    public function attach(Observer $observer);

    public function detach(Observer $observer);

    public function getState();

    public function setState($state);

    public function notify();
}
