<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'kelas_id',
        'catalog_id',
        'bk_title',
        'slug',
        'bk_qty',
        // 'bk_date',
        'bk_writer',
        // 'synopsis',
        'publisher',
        'bk_location',
        'status'
    ];

    public function catalogs(){
        return $this->belongsTo(Catalog::class, 'catalog_id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
