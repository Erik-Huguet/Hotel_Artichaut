<?php

namespace Tests\Feature;

use App\Models\Chamber;
use App\Models\Comment;
use App\Models\Discount;
use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChamberTest extends TestCase
{

    use RefreshDatabase;

    public function test_post_chambers()
    {
        $response = $this->post('/api/v1/chambers', [


            'number_chamber' => 1,
            'fk_Chambers_TypeChamber' => 1,
        ]);
        $response->assertCreated();
        $this->assertCount(1, Chamber::all());
    }

}
