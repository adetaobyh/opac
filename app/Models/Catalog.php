<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $table = "catalogs";
    protected $primaryKey = "id";
    protected $fillable = [
        'kd_catalog',
        'nm_catalog'
    ];

    public function books(){
        return $this->hashMany(Book::class);
    }
}
