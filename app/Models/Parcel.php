<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'pickup_time', 'sender',
        'origin', 'reciever', 'reciever_phone',
        'destination', 'status', 'event', 'location'
    ];

    public function changes()
    {
        return $this->hasMany(EventChange::class);
    }
}
