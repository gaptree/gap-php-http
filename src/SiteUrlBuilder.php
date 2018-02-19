<?php
namespace Gap\Http;

class SiteUrlBuilder
{
    protected $siteManager;

    public function __construct(SiteManager $siteManager)
    {
        $this->siteManager = $siteManager;
    }

    public function url(
        string $site,
        string $path,
        array $query = [],
        string $protocol = '//'
    ): string {
        // $protocol: http:// | https:// | //
        $protocol = $protocol ? $protocol : '//';

        $host = $this->siteManager->getHost($site);
        if ($path[0] !== '/') {
            $path = '/' . $path;
        }

        return $protocol . $host . $path
            . ($query ? ('?' . http_build_query($query)) : '');
    }

    public function staticUrl(string $path, array $query = [], string $protocol = ''): string
    {
        return $this->url('static', $path, $query, $protocol);
    }
}
