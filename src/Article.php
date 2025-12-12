<?php

namespace App;

final class Article
{
    public string $title = '';

    public function getSlug()
    {
        $slug = preg_replace('/\s+/', '_', trim($this->title));

        return $slug;
    }
}
