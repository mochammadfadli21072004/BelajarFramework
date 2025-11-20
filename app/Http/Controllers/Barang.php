<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB; 

class Barang extends Controller
{
    // ... (Method index tidak diubah)

    public function index($id)
    {
        // Variabel $isi_data diatur ke 0 agar memicu blok @else
        $isi_data = 0; 
        
        // $max_loop diatur ke 5 agar loop berhenti di 5
        $max_loop = 5; 

        return view('barang', [
            'data' => $id,
            'isi_data' => $isi_data, // Mengirim 0 ke view
            'max_loop' => $max_loop // Mengirim 5 ke view
        ]);
    }

    public function simpan_get(){
        
        $data = [
            'name' => 'Mie Goreng', 
            'stock' => 100,
            'brand' => 'Indomie',
            'buy_price' => 1000,
            'sell_price' => 1500, // 👈 PERBAIKAN: Ubah 'sale_price' menjadi 'sell_price'
            'comment' => 'barang pertama kali'
        ];

        // Menggunakan create() untuk menyimpan data
        $proses = Products::create($data);
        
        // Tambahkan return agar tahu hasilnya dan proses berhenti
        dd($proses); // Menampilkan data yang baru saja disimpan
    } 

    public function hapus_get($id){
        // Menemukan dan menghapus data berdasarkan products_id
        $proses = Products::where('products_id', $id)->delete();

        if($proses){
            echo 'Data berhasil dihapus';
        } else {
            echo 'Data gagal dihapus atau tidak ditemukan';
        }
    }

    public function update_get($id){
        // Data yang ingin diupdate
        $data_update = [
            'name' => 'Indomie Goreng',
            'stock' => 1000,
            'brand' => 'Indofood Indo',
            'buy_price' => 2000,
            'sell_price' => 2500, // 👈 PERBAIKAN: Ubah 'sale_price' menjadi 'sell_price'
            'comment' => 'Update pertama kali'
        ];

        // Menggunakan find() untuk mencari model, lalu update() untuk memperbarui datanya
        $proses = Products::find($id)->update($data_update);
        
        if($proses){
            echo 'Data berhasil diupdate';
        } else {
            echo 'Data gagal diupdate atau tidak ditemukan';
        }
    }

    public function view_get(){
        // Mengambil semua data dari tabel products
        $data = Products::all();
        
        // Fungsi dd() (dump and die) akan menampilkan output seperti pada gambar pertama
        dd($data);
    }
    
    // ... (Method resource lainnya dihilangkan untuk brevity)

}