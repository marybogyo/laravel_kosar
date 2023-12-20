<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducType extends Model
{
    use HasFactory;
    protected $primaryKey = 'type_id';
    protected $fillable = [
        'name',
        'description',
        'cost',
    ];
}
