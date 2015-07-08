<?php

namespace Kelemen\Observer;

trait ObservableBehavior
{
    /** @var array             All attached observers */
    protected $observers = [];

    /** @var string            Current state of observable object */
    protected $state;

    /**
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $i = array_search($observer, $this->observers);
        if ($i === false) {
            $this->observers[] = $observer;
        }
    }

    /**
     * @param Observer $observer
     */
    public function detach(Observer $observer)
    {
        if (!empty($this->observers)) {
            $i = array_search($observer, $this->observers);
            if ($i !== false) {
                unset($this->observers[$i]);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
        $this->notify();
    }

    /**
     *
     */
    public function notify()
    {
        if (!empty($this->observers)) {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
        }
    }
}
