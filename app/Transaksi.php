<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Barang;
use Distributor;
use LaporanTransaksi;


class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'kd_barang', 'kd_user', 'jumlah_beli', 'total_harga', 'tanggal_beli', 'kd_distributor', 'kd_detail'
    ];
    public function barangs()
    {
        return $this->hasOne('App\Barang', 'kd_barang', 'kd_barang');
    }
    public function distributors()
    {
        return $this->hasOne('App\Distributor','kd_distributor', 'kd_distributor');
    }
    // public function laporan_transaksi()
    // {
    //     return $this->belongsTo('App\LaporanTransaksi', 'kd_transaksi');
    // }  
}
