<?php
namespace Gap\Http\Session;

class SessionBuilder
{
    public function __construct(array $opts)
    {
        $validOptions = array_flip(array(
            'cache_limiter', 'cookie_domain', 'cookie_httponly',
            'cookie_lifetime', 'cookie_path', 'cookie_secure',
            'entropy_file', 'entropy_length', 'gc_divisor',
            'gc_maxlifetime', 'gc_probability', 'hash_bits_per_character',
            'hash_function', 'name', 'referer_check',
            'serialize_handler', 'use_cookies',
            'use_only_cookies', 'use_trans_sid', 'upload_progress.enabled',
            'upload_progress.cleanup', 'upload_progress.prefix', 'upload_progress.name',
            'upload_progress.freq', 'upload_progress.min-freq', 'url_rewriter.tags',
            'save_handler', 'save_path'
        ));
        foreach ($opts as $key => $value) {
            if ($value && isset($validOptions[$key])) {
                ini_set('session.' . $key, $value);
            }
        }
    }

    public function build()
    {
        return new Session();
    }
}
