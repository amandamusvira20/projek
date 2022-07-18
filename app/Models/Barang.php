<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public function detailpesanan()
{
	return $this->hasMany('App\DetailPesanan','barang_id', 'id');
}
}
