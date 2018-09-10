<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function a_user_can_get_all_criterias()
    {
        $response = $this->json('GET','/api/criterias');

        $response->assertStatus(200);
    }
    /**
     * @test
     * @return void
    */
    public function a_user_can_get_a_criteria()
    {
        $response = $this->json('GET', '/api/criterias/1');

        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
    */
    public function a_user_can_to_delete_a_criteria()
    {
        $response = $this->json('DELETE', '/api/criterias/1');
        
        $response->assertStatus(200);
    }
}
