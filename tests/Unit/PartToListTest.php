<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
namespace Tests\Feature;
use Tests\TestCase;
use App\Models\PartsToList;

class PartToListTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_adding_part_to_list()
    {
        $response = PartsToList::create([
            'shopping_list_id' => 1,
            'part_id' => 14,
        ]);

        $this->assertDatabaseHas('part_shopping_list', [
            'shopping_list_id' => 1,
            'part_id' => 14,
        ]);
    }
}
