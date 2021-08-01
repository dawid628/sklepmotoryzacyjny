<?php

namespace Tests\Feature;

use App\Models\ShoppingList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_list()
    {
         $this->get(route('list'))->assertSessionHasNoErrors();
         
    }
}
