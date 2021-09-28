<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Todo;

class TodoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
