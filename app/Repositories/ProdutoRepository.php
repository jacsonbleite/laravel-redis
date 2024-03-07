<?php

namespace App\Repositories;

use App\Interfaces\ProdutoRepositoryInterface;
use Illuminate\Support\Facades\Cache;
use App\Models\Produto;

class ProdutoRepository implements ProdutoRepositoryInterface
{
    public function getAll()
    {
        $expirar = 60;

        return Cache::remember('produtoscahe', $expirar, function(){
            //info('não há cache');
            return Produto::with('categorias')->get();
        });

    }

}
