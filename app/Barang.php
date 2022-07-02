<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Merek;
use Distributor;
use App\Transaksi;
use App\LaporanTransaksi;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'kd_barang', 'nama_barang', 'kd_merek', 'kd_distributor', 'tanggal_masuk', 'harga_barang', 'stok_barang', 'keterangan', 'harga_jual'
    ];
    public function mereks()
    {
        return $this->belongsTo('App\Merek', 'kd_merek', 'kd_merek');
    }
    public function distributors()
    {
        return $this->belongsTo('App\Distributor', 'kd_distributor');
    }
    public function transaksis()
    {
        return $this->hashMany('Transaksi');
    }
    public function laporan_transaksi()
    {
        return $this->hashMany('LaporanTransaksi');
    }
}
