<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $primaryKey = "id";
    protected $fillable = [
        'catalogs_id',
        'bk_title',
        'slug',
        'bk_date',
        'bk_writer',
        'synopsis',
        'publisher'
    ];

    public function catalogs(){
        return $this->belongsTo(Catalog::class);
    }

    public function bookings(){
        return $this->belongsTo(Booking::class);
    }
}
