<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\ProdutoCategoria;

class ProdutosCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categorias = Categoria::all()->pluck('id')->toArray();

        $produtos = Produto::all();
        foreach ($produtos as $produto) {
            // Defina o número aleatório de categorias a serem associadas a cada produto
            $numCategorias = $faker->numberBetween(2, 4);

            // Garanta que não haja duplicatas na associação de categorias
            $categoriaIds = $faker->randomElements($categorias, $numCategorias);
            foreach ($categoriaIds as $categoriaId) {
                ProdutoCategoria::firstOrCreate([
                    'produto_id' => $produto->id,
                    'categoria_id' => $categoriaId
                ]);
            }
        }
    }
}
