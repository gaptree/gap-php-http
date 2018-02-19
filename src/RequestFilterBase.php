<?php
namespace Gap\Http;

abstract class RequestFilterBase
{
    protected $request;

    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    abstract public function filter(): void;
}
