<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = ['guide_id', 'available_date', 'max_quota'];

    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
}