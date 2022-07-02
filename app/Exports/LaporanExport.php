<?php
  
namespace App\Exports;
  
use App\LaporanBarang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class LaporanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LaporanBarang::all();
    }
    public function map($laporan_barang):array
    {
        return [
            //data yang dari kolom tabel database yang akan diambil
            
            $laporan_barang->kd_barang,
            $laporan_barang->nama_barang,
            $laporan_barang->merek,
            $laporan_barang->nama_distributor,
            $laporan_barang->tanggal_masuk,
            $laporan_barang->harga_barang,
            $laporan_barang->stok_barang,
            $laporan_barang->keterangan
        ];
    }

    public function headings(): array
    {
        return [
            'Kode Barang',
            'Nama Barang',
            'Merek',
            'Distributor',
            'Tanggal Masuk',
            'Harga Barang',
            'Stok Barang',
            'Keterangan',
        ];
    }
}
