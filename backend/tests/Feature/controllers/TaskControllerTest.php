<?php

namespace Tests\Feature\controllers;

use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_list_tasks()
    {
        $response = $this->get('/api/tasks');

        $response->assertStatus(200);
    }

    public function test_it_checks_for_invalid_title()
    {

        $this->postJson('/api/tasks', ['title' => ''])
            ->assertStatus(422)
            ->assertJsonStructure(['message', 'errors' => ['title']]);
    }

    public function test_it_create_task()
    {

        $this->postJson('/api/tasks', [
            "title" => "title",
            "description" => "test description",
            "admin_id" => 1,
            "user_id" => 50
        ])
            ->assertStatus(200);
    }
}
