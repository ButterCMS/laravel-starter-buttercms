<?php

namespace App\Http\Routing;

class UrlGenerator extends \Illuminate\Routing\UrlGenerator
{
    public function to($path, $extra = [], $secure = null)
    {
        if ($this->isValidUrl($path)) {
            return $path;
        }

        $tail = implode(
            '/',
            array_map(
                'rawurlencode',
                (array) $this->formatParameters($extra)
            )
        );

        $root = $this->formatRoot($this->formatScheme($secure));

        [$path, $query] = $this->extractQueryString($path);

        //To remove all slashes
        $url = $this->format($root, sprintf('/%s/%s/%s/', $path, $tail, $query));
        $url .= '/';

        return $url;
    }
}
