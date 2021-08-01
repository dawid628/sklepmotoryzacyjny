<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Part;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_part()
    {
        $id = 2;
        $response = $this->get("/show/$id");
        $response->assertStatus(200)->assertJsonStructure();
    }
}
