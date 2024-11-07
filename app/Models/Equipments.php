<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    use HasFactory;

    protected $table = 'equipments';

    protected $fillable = [
        'activity_date',
        'input_time',
        'output_time',
        'equipment',
        'brand',
        'serial_number',
        'responsible',
        'cpf',
        'rg',
        'company',
    ];
}
