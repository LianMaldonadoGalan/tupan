<?php

namespace App\Models;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    protected $fillable = ['nombre','desc','precio','categoria_id','imgpath'];


    public function categoria(){

        return $this->belongsTo(Categoria::class);
    }

    public function getProductoPrecioAttribute(){
        return "El producto {$this->nombre} cuesta {$this->precio} pesos";
    }

    public function getNombreAttribute($name){
        return strtoupper($name);
    }

    public function setNombreAttribute($name){
        $this->attributes['nombre'] = strtoupper($name);
    }
    
}
