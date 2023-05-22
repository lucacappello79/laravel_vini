<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'municipality', 'province', 'region', 'country', 'phone_number', 'mail'];
}
