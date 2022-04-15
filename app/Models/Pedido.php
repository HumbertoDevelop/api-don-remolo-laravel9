<?php

namespace App\Models;

use App\Http\Controllers\BebidaController;
use App\Http\Controllers\EmpanadaController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PostreController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['description','bebida_id','empanada_id','pizza_id','postre_id'];
    
    public function bebidas()
    {
        return $this->hasMany(BebidaController::class);
    }
    public function empanadas()
    {
        return $this->hasMany(EmpanadaController::class);
    }
    public function pizzas()
    {
        return $this->hasMany(PizzaController::class);
    }
    public function postres()
    {
        return $this->hasMany(PostreController::class);
    }
}
