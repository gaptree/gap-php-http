<?php
namespace Gap\Http;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class Request extends SymfonyRequest
{
    public function setUserId(string $userId): self
    {
        $session = $this->getSession();
        if (is_null($session)) {
            throw new \Exception('session cannot be null');
        }

        $session->set('userId', $userId);
        return $this;
    }

    public function getUserId(): string
    {
        $session = $this->getSession();
        if (is_null($session)) {
            return '';
        }

        if (is_null($session->get('userId'))){
            return '';
        }

        return $session->get('userId');
    }
}
