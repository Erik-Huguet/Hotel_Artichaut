<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\News;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_post_an_database_news()
    {
        $response = $this->post('api/v1/news', [
            'title_fr_new' => 'ceci est un test',
            'describe_fr_new' => 'blablalbi blablabla',
            'title_ang_new' => 'do you speak english',
            'describe_ang_new' => 'yes yes',
            'icon_new' => "http://image.fr",
            'position_icon_new' => 3,
            'fk_Users_News' => 1 ,
        ]);
        $response->assertCreated();
        $this->assertCount(15, News::all());
}
}
