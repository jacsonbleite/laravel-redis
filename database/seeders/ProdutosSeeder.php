<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Produto;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,500) as $index)
        {
            Produto::create([
                'nome' => $faker->word,
                'preco' => $faker->randomFloat(2,10,100)
            ]);
        }
    }
}
