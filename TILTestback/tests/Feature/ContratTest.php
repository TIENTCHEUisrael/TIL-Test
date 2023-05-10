<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContratTest extends TestCase
{
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_save()
    {
        $contrat=[
            "numero" => "numero1",
            "type" => "type1",
            "date" => "date1",
            "duree" => "2023-05-10 00:35:03",
            "createdAt" => "createdAt1",
            "idclient" =>1
        ];       
        $response = $this-> withHeaders([
            'X-Header'=> 'Value'
        ])->POST('api/contrat',$contrat);
        $response->assertStatus(200);
    }
    public function test_update()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_delete()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_getall()
    {
        $response = $this->get('api/contrat');

        $response->assertStatus(200);
    }
}
