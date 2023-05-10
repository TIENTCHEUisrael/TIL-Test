<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contrat>
 */
class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type=['déterminé','non determiné','usage','CDI','Senior'];
        $start= $this -> faker ->dateTimeBetween('-1 day','now');
        $end= $this -> faker ->dateTimeBetween($start,'+1 day');
        $diff=$start->diff($end);
        $client=count(Client::all());
        return [
            'date' => fake()->date(),
            'type' => rand(1,count($type)),
            'numero'=>  rand(1,100),
            'duree'=>  $diff->format('%H:%I:%S'),
            'createdAt'=>  fake()->date(),
            "idclient"=> rand(1,$client)
        ];
    }
}
