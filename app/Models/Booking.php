<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "bookings";
    protected $primaryKey = "id";
    protected $fillable = [
        'users_id',
        'books_id',
        'booking_start',
        'booking_end',
        'extend_book',
        'booking_number',
        'stats',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function books(){
        return $this->belongsTo(Book::class);
    }
}
