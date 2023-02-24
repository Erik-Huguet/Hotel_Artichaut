<?php

namespace Tests\Feature;

use App\Models\Chamber;
use App\Models\Comment;
use App\Models\Discount;
use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
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
    public function test_post_chambers()
    {
        $response = $this->post('/api/v1/chambers', [


            'number_chamber'=> 1,
            'fk_Chambers_TypeChamber'=> 1,
        ]);
        $response->assertCreated();
        $this->assertCount(1, Chamber::all());
    }
    public function test_post_comments()
    {
        $response = $this->post('/api/v1/comments', [

                'title_fr_comment'=> 'Genial ',
                'describe_fr_comment' =>"Agreable et serviable",
                'title_ang_comment' => "Great",
                'describe_ang_comment'=> "sympatic and serviable",
                'fk_Users_Comments'=> 1,
                'fk_Chambers_Comments' => 1,
                'rating' => 2,
        ]);
        $response->assertCreated();
        $this->assertCount(1, Comment::all());
    }   public function test_post_discounts()
    {
        $response = $this->post('/api/v1/discounts', [

                'title_fr_discount'=> 'Genial ',
                'describe_fr_discount' =>"Agreable et serviable",
                'title_ang_discount' => "Great",
                'describe_ang_discount'=> "sympatic and serviable",
                'code_discount' => 25,
                'fk_Users_Discounts' => 1,

        ]);
        $response->assertCreated();
        $this->assertCount(1, Discount::all());
    }
}

