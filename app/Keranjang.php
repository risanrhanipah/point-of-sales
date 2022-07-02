<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $fillable = ['kd_keranjang','kd_barang','kd_user','jumlah_beli','total_harga','tanggal_beli','kd_distributor']; 
}
