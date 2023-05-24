<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'year', 'winery_id', 'color', 'type', 'alcohol_content', 'extract', 'acidity'];

    public function winery()
    {
        return $this->belongsTo(Winery::class);
    }
}
