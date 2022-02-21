<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;



class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['articulo', 'descripcion', 'id_categoria', 'precio', 'cantidad'];

    public function categoria(){
        return $this->hasMany(Categoria::class, 'id');
    }
}
