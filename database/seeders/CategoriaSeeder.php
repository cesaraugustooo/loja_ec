<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Sub_categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = Faker::create('pt-BR');

       for($i = 0; $i <= 10; $i++ ) {
         Categoria::create([
            "nome"=> $faker->name(),
        ]);
       }

       for($i = 0; $i <= 10; $i++ ) {
         Sub_categoria::create([
            "nome"=> $faker->name(),
            'categorias_id' => $faker->biasedNumberBetween(1,10)
        ]);
       }
        
    }
}
