<?php
namespace Gap\Http;

class RequestFilterManager
{
    protected $filters = [];

    public function filter(Request $request): void
    {
        foreach ($this->filters as $filter) {
            $filter->setRequest($request);
            $filter->filter();
        }
    }

    public function addFitler(RequestFilterBase $requestFilter): self
    {
        $this->filters[] = $requestFilter;
        return $this;
    }
}
