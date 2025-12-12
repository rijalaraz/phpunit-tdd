<?php

use PHPUnit\Framework\TestCase;

final class ArticleTest extends TestCase
{
    public function testTitleIsEmptyByDefault()
    {
        $article = new App\Article;

        $this->assertEmpty($article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $article = new App\Article;

        $this->assertSame($article->getSlug(), "");
    }
}
