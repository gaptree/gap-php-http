<?php
namespace Gap\Http;

interface ResponseInterface
{
    public function send(): ResponseInterface;
}
