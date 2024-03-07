<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProdutoRepository;

class ProdutosController extends Controller
{
    protected $produtoRepository;

    public function __construct(ProdutoRepository $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    function index()
    {
        $produtos = $this->produtoRepository->getAll();

        return view('produtos', compact(['produtos']));
    }
}
