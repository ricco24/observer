<?php

namespace Kelemen\Observer;

interface Observer
{
    public function update(Observable $observable);
}
