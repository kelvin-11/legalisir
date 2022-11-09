<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengambilan extends Model
{
    use HasFactory;

    public function transaksis(){
        return $this->belongsTo(transaksi::class,'transaksi_id','id');
    }
}
