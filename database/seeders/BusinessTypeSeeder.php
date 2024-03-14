<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businessTypes = [
            'Kuliner',
            'Fashion',
            'Jasa Kecantikan',
            'Bahan pembersih keperluan rumah tangga',
            'Kreatif dan Desain',
            'Pertanian dan Perkebunan',
            'Perdagangan Barang',
            'Jasa',
            'Jasa Percetakan',
            'Barang',
            'Sembako',
            'Toko Perlengkapan Olahraga',
            'Pendidikan dan Pelatihan',
            'Teknologi Informasi',
            'Kerajinan Tangan',
            'Otomotif',
            'Kesehatan',
            'Pariwisata',
            'Hiburan',
            'Olahraga dan Kesehatan',
            'Rumah Tangga',
            'Kuliner Khas Daerah',
            'Peternakan',
            'Konsultan',
            'Fashion dan Kecantikan Muslim',
            'Produk Kesehatan Herbal',
            'Produk Ramah Lingkungan',
            'Perhiasan',
            'Tekstil dan Kulit',
            'Home Industri Makanan',
            'Home Industri Kreatif',
            'Desain Interior',
            'Periklanan',
            'Produk Fashion Anak',
            'Pengolahan Limbah',
        ];

        // Masukkan data jenis usaha ke dalam tabel
        foreach ($businessTypes as $type) {
            DB::table('business_types')->insert([
                'jenis_usaha' => $type,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}