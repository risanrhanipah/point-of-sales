<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;
use App\Transaksi;
use App\LaporanBarang;

class Distributor extends Model
{
    protected $table = 'distributor';
    protected $fillable = [
        'kd_distributor', 'nama_distributor', 'alamat', 'no_telp'
    ];

    public function barangs()
    {
        return $this->hashMany('Barang');
    }

    public function transaksis()
    {
        return $this->hashMany('Transaksi');
    }

    public function laporan_barang()
    {
        return $this->hashMany('LaporanBarang');
    }
}
