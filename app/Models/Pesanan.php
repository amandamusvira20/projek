<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    public function user()
    {
	return $this->belongsTo('App\User','user_id', 'id');
    }
    public function detailpesanan()
    {
	return $this->hasMany('App\DetailPesanan','pesanan_id', 'id');
    }
}
