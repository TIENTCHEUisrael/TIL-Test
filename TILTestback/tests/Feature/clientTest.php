<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class clientTest extends TestCase
{
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_save()
    {
        $client=[
            "nom" => "nom",
            "ville" => "ville",
            "telephone" => "(217) 971-7380",
            "numero" => "1",
            "createdAt" => "createdAt",
        ];       
        $response = $this-> withHeaders([
            'X-Header'=> 'Value'
        ])->POST('api/client',$client);
        $response->assertStatus(200);
    }
    public function test_update()
    {
        $client=[
            "nom" => "babas",
            "ville" => "ok",
            "telephone" => "(217) 971-7380",
            "numero" => "1",
            "createdAt" => "createdAt",
        ];       
        $response = $this->PATCH('api/client/{11}',$client);
        $response->assertStatus(200);
    }
    public function test_delete()
    {
        $response = $this->DELETE('api/client/51');
        $response->assertStatus(200);
    }
    public function test_getall()
    {
        $response = $this->get('api/client');
        $response->assertStatus(200);
    }
}
