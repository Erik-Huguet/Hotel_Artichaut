<?php

namespace Tests\Feature;

use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
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
        $this->assertCount(1, News::all());
}
    public function test_post_users()
    {
        $response = $this->post('api/v1/users', [

            'lastname' => 'il etait une fois',
            'firstname' => 'à fort fort lointain',
            'pseudo' => 'un âne parlant',
            'email' => 'vivant au coté de son meilleur ami',
            'phone' => 'un ogre au nom de shrek',
            'avatar_user' => 'qui lui vivant avec sa femme fiona',
            'password' => 'c\'e"st tout',
            'fk_Users_Roles' => 'the end',
        ]);
        $response->assertCreated();
        $this->assertCount(1, User::all());
    }
}
