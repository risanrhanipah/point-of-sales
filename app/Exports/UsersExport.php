<?php
  
namespace App\Exports;
  
use App\LaporanTransaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LaporanTransaksi::all();
    }

    public function map($laporan_transaksi):array
    {
        return [
            //data yang dari kolom tabel database yang akan diambil
            
            $laporan_transaksi->id,
            $laporan_transaksi->nama_barang,
            $laporan_transaksi->jumlah_beli,
            $laporan_transaksi->total_harga,
            $laporan_transaksi->created_at
        ];
    }

    public function headings(): array
    {
        return [
            'Kode Transaksi',
            'Nama Barang',
            'Jumlah Beli',
            'Total Harga',
            'Tanggal Beli',
        ];
    }
}