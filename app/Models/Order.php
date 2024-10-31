<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Definir las relaciones
    public function teamwork()
    {
        return $this->belongsTo(Teamwork::class);
    }

    public function solicitude()
    {
        return $this->belongsTo(Solicitude::class);
    }

    // Si quieres definir los campos que se pueden llenar masivamente
    protected $fillable = [
        'teamwork_id',
        'solicitude_id',
    ];
}
