<?php
namespace Gap\Http\RequestFilter;

use Gap\Http\RequestFilterBase;

class CsrfFilter extends RequestFilterBase
{
    public function filter(): void
    {
        if ($this->request->isMethod('POST')) {
            $postToken = $this->request->request->get('csrfToken');
            $sessionToken = $this->request->getSession()->get('csrfToken');

            if (!hash_equals($postToken, $sessionToken)) {
                throw new \Exception('CSRF Error Request');
            }
        }
    }
}
