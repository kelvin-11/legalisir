<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    public function ijasah(){
        return $this->hasMany(ijasah::class, 'ijasah_id','id');
    }

    public function pengambilan(){
        return $this->hasMany(pengambilan::class,'transaksi_id','id');
    } 

    public function pengiriman(){
        return $this->hasMany(pengiriman::class,'transaki_id','id');
    }
}
