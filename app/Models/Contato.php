<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'mail', 'address', 'number', 'neighborhood', 'city', 'state', 'zip', 'phone', 'avatar'];

}
