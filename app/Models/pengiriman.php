<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    use HasFactory;

    public function transaksii(){
        return $this->belongsTo(transaksi::class,'transaksi_id','id');
    } 
}
