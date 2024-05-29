<?php

abstract class Handler
{
    protected $nextHandler;

    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle($request)
    {
        $response = $this->process($request);
        if ($response !== null) {
            return $response;
        } elseif ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return "Ваш запит найближчим часом буде оброблений.";
    }

    abstract protected function process($request);
}

