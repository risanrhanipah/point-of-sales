<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Merek;
use Distributor;
 
class LaporanBarang extends Model
{
    protected $table = 'barangjadis';
    protected $fillable = [
        'kd_barang', 'nama_barang', 'kd_merek', 'kd_distributor', 'tanggal_masuk', 'harga_barang', 'stok_barang', 'keterangan'
    ];

    public function mereks()
    {
        return $this->belongsTo('App\Merek', 'kd_merek');
    }
    
    public function distributors()
    {
        return $this->belongsTo('App\Distributor', 'kd_distributor');
    }
}
