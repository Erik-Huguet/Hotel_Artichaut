<?php

namespace Tests\Feature;

use App\Models\Discount;
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
    public function test_post_discount()
    {
        $response = $this->post('/api/v1/discounts', [
            'title_fr_discount' => 'Titre français',
            'title_ang_discount' => 'Title English',
            'describe_fr_discount' => 'Description française',
            'describe_ang_discount' => 'English description',
            'code_discount' => '1457',
            'fk_Users_Discounts' => 1
        ]);

        $response->assertCreated();
        $this->assertCount(1, Discount::all());

    }

    public function test_put_discount()
    {
        Discount::factory()->create();
        $discount = Discount::first();

        $this->put('/api/v1/discounts/' . $discount->id, [
            'title_fr_discount' => 'Titre en français',
            'title_ang_discount' => 'English Title',
            'describe_fr_discount' => 'Description dfkljskljdfskljdfskljdfs',
            'describe_ang_discount' => 'English description',
            'code_discount' => '1457',
            'fk_Users_Discounts' => 1
        ]);
        $discount = Discount::first(); // Ca ou refresh pour récupérer les données modifiées. Sinon, le test échoue.

        $this->assertEquals('Titre en français', $discount->title_fr_discount);
        $this->assertEquals('English Title', $discount->title_ang_discount);

    }

    /*public function test_delete_discount()
    {
        $this->post('/api/v1/discounts', [
            'title_fr_discount' => 'Titre français',
            'title_ang_discount' => 'Title English',
            'describe_fr_discount' => 'Description française',
            'describe_ang_discount' => 'English description',
            'code_discount' => '1457',
            'fk_Users_Discounts' => 1
        ]);

        $discount = Discount::first();

        $this->delete('/api/v1/discounts/' . $discount->id);;

        $this->assertCount(7, Discount::all());

    }*/
}
