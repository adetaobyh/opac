<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "kelas";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'nm_kelas'
    ];

    public function books(){
        return $this->belongsTo(Book::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
