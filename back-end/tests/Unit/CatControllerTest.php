<?php

namespace Tests\Feature;

use App\Models\Cat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class CatControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAllCats()
    {
        $cat = Cat::factory()->create();

        $response = $this->get('/api/cats');
    
        $response->assertStatus(200);
    
        $response->assertJson([
            [
                'id' => $cat->id,
                'name' => $cat->name,
                'weight_imperial' => $cat->weight_imperial
            ],
        ]);
        
    }

    public function testGetCatById()
    {
        
        $cat = Cat::factory()->create();

        $response = $this->get('/api/cats/id/' . $cat->id);

        $response->assertStatus(200);

        $response->assertJson([
            'id' => $cat->id,
            'name' => $cat->name,
        ]);
    }

    public function testGetCatByIdNotFound()
    {
        $response = $this->get('/api/cats/id/999');

        $response->assertStatus(404);

        $response->assertJson([
            'error' => 'Cat breed not found',
        ]);
    }

    public function testIncreaseRank()
    {
        $cat = Cat::factory()->create();

        $oldSearches = $cat->searches;

        $response = $this->post('/api/cats/rank', ['name' => $cat->name]);

        $response->assertStatus(200);

        $cat->refresh();

        $this->assertEquals($cat->searches, $oldSearches + 1);

        $response->assertJson([
            'message' => 'Rank increased successfully',
        ]);
    }

    public function testIncreaseRankNotFound()
    {
        $response = $this->post('/api/cats/rank', ['name' => 'NonexistentCat']);

        $response->assertStatus(404);

        $response->assertJson([
            'error' => 'Cat breed not found',
        ]);
    }
}