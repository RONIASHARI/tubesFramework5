<?php

namespace Database\Seeders;

use Database\Factories\ProdukFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\produk;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('produks')->insert([
            [
                'namaproduk' => 'Meja Belajar',
                'deskripsiproduk' => 'Meja belajar yang ideal untuk anak-anak dan remaja. Dibuat dari kayu berkualitas tinggi dengan desain ergonomis yang membantu menjaga postur tubuh yang baik saat belajar. Dilengkapi dengan laci untuk penyimpanan alat tulis dan buku.',
                'status' => 'Available',
                'fotoproduk' => 'Meja Belajar.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaproduk' => 'TV',
                'deskripsiproduk' => 'Televisi LED 4K Ultra HD dengan ukuran layar 55 inci. Menawarkan kualitas gambar yang tajam dan warna yang hidup. Dilengkapi dengan fitur smart TV yang memungkinkan akses ke berbagai aplikasi streaming seperti Netflix, YouTube, dan lainnya.',
                'status' => 'Available',
                'fotoproduk' => 'TV.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaproduk' => 'Set Meja Makan',
                'deskripsiproduk' => 'Set meja makan elegan yang terdiri dari satu meja besar dan enam kursi. Dibuat dari kayu jati solid dengan finishing halus. Cocok untuk ruang makan besar dan memberikan kesan mewah pada rumah Anda.',
                'status' => 'Out of Stock',
                'fotoproduk' => 'MejaMakan.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaproduk' => 'Meja Rias',
                'deskripsiproduk' => 'Meja rias dengan cermin besar dan beberapa laci untuk menyimpan kosmetik dan perhiasan. Desain modern dengan warna putih yang memberikan kesan bersih dan elegan pada kamar tidur Anda.',
                'status' => 'Available',
                'fotoproduk' => 'MejaRias.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaproduk' => 'Rak Sepatu',
                'deskripsiproduk' => 'Rak sepatu praktis dengan kapasitas hingga 20 pasang sepatu. Terbuat dari bahan metal yang kuat dan tahan lama. Desain vertikal yang hemat tempat, ideal untuk diletakkan di dekat pintu masuk atau di dalam lemari.',
                'status' => 'Discontinued',
                'fotoproduk' => 'RakSepatu.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        // Produk::factory()->count(50)->create();

    }
}
