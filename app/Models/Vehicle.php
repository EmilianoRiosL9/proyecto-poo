<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicle
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $patente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehicle extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['marca', 'modelo', 'patente'];
}
