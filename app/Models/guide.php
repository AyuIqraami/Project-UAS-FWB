<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guide extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'bio', 'price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'destination_guides');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function availabilities()
    {
        return $this->hasMany(Availability::class);
    }
}