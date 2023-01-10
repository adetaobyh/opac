<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Level extends Model
{
    use HasFactory;
    protected $table = "levels";
    protected $primaryKey = "id";
    protected $fillable = [
        'kd_level',
        'nm_level'
    ];

    public function users(){
        return $this->hashMany(User::class);
    }
}
