<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teamwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee1_id',
        'employee2_id',
        'vehicle_id',
    ];

    public function employee1()
    {
        return $this->belongsTo(Employee::class, 'employee1_id');
    }

    public function employee2()
    {
        return $this->belongsTo(Employee::class, 'employee2_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
