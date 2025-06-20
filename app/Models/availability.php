<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class availability extends Model
{
    use HasFactory;

    protected $fillable = ['guide_id', 'available_date', 'max_quota'];

    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
}