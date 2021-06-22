<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoriaprod';

    public $timestamps = false;

    public function producto(){
        return $this->hasMany(Producto::class);
    }
}
