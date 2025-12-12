<?php

use PHPUnit\Framework\TestCase;

final class ArticleTest extends TestCase
{
    public function testTitleIsEmptyByDefault()
    {
        $article = new App\Article;

        $this->assertEmpty($article->title);
    }
}
