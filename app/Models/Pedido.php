<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['description','bebidas_id','empanadas_id','pizzas_id','postres_id'];
    public function bebidas()
    {
        return $this->hasMany(Bebida::class,'id');
    }
    public function empanadas()
    {
        return $this->hasMany(Empanada::class,'id');
    }
    public function pizzas()
    {
        return $this->hasMany(Pizza::class,'id');
    }
    public function postres()
    {
        return $this->hasMany(Postre::class,'id');
    }
}
