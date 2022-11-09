<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ijasah extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
     public function transaksi(){
        return $this->belongsTo(transaksi::class, 'ijasah_id','id');
     }
}
