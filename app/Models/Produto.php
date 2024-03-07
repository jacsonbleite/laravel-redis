<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'preco'];

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'produto_categorias', 'produto_id', 'categoria_id');
    }
}
