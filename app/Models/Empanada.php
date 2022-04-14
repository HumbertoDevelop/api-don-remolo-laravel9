<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empanada extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','description','file'];
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
