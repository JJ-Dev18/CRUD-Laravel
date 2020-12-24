<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function empresa() {
    return $this->belongsTo(Empresa::class); // eloquent interpretará que la fk es el nombre de la clase en snakecase seguido de _id, o sea 'ciudad_id' 
}
}
