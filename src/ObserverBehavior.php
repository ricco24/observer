<?php

namespace Kelemen\Observer;

trait ObserverBehavior
{
    /**
     * Trigger observer function fired by observable
     * @param Observable $observable
     */
    public function update(Observable $observable)
    {
        // looks for an observer method with the state name
        if (method_exists($this, $observable->getState())) {
            call_user_func_array(array($this, $observable->getState()), array($observable));
        }
    }
}
