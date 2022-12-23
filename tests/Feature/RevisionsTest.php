<?php
namespace Tychovbh\LaravelRevisions\Tests\Feature;

use Tychovbh\LaravelRevisions\Tests\TestCase;
use Tychovbh\LaravelRevisions\TestsApp\App\Models\Page;

class RevisionsTest extends TestCase
{
    /**
     * @test
     */
    public function itCanCreateRevisionOnUpdate()
    {
        $page = Page::factory()->create();


        $this->assertDatabaseHas('pages', [
            'title' => $page->title,
            'url' => $page->url
        ]);
    }
}
