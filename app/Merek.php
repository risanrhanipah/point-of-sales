<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;
use App\LaporanBarang;

class Merek extends Model
{
    protected $table = 'merek';
    protected $fillable = [
    'kd_merek', 'merek'
];

public function barangs()
{
    return $this->hashMany('Barang');
}

public function laporan_barang()
{
    return $this->hashMany('LaporanBarang');
}
}
