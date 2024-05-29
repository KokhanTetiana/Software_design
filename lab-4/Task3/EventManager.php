<?php
class EventManager
{
    public $listeners = array();

    public function subscribe($eventType, $callback)
    {
        if (!isset($this->listeners[$eventType])) {
            $this->listeners[$eventType] = array();
        }
        $this->listeners[$eventType][] = $callback;
    }

    public function notify($eventType, $data = null)
    {
        if (isset($this->listeners[$eventType])) {
            foreach ($this->listeners[$eventType] as $listener) {
                call_user_func($listener, $data);
            }
        }
    }
}

