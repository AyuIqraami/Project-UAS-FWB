<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'location', 'image'];

    public function guides()
    {
        return $this->belongsToMany(Guide::class, 'destination_guides');
    }
}
