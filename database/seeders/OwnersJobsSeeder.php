<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnersJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into owners table
        $ownerId1 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Dinny Septhiani',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Curug Sekolah Rt/Rw 03/02 No.099',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId2 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Suebah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Pekuncen Rt.012/003 ciwedus',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId3 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Ike lia sulastri',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Twi blok fw A 82c No.8 Rt.01/05 perum.warnasari',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId4 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Tini kartini',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Pekucen Rt.11/03',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId5 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Sopiah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Puri Krakatau hijau Blok C Rt.08/10',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId6 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Tita Herawati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Jl. Pangeran jayakarta Rt.0103',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId7 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Sri hartini',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Perumahan kedawung rahayu E2 No.5 Rt.03/07 Dringo',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId8 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Nurhayati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Kelelet Rt.01/03',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId9 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Sri rayahu',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Tegal Cabe Jalan Fatahillah Rt.02/08',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId10 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Devi Salamah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Kubang Lesung Kulon',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId11 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Nikmal Maula',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Kepuh Denok',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId12 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Hj. Yati Rohayati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Kubang Welut Rt.02/04',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId13 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Evi Afiyah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Komp. PCI  Blok D 81/20',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId14 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Nurhasanah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Sawah Rt.01/02',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId15 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Rika Kurnia',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Tegal Cabe Rt. 01/02 No.14',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId16 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Masrunti',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Kubang Lesung Kulon',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId17 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Rowiyah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Perum. BCK Blok B17 No.25',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId18 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Trisamtiono',
            'jenis_kelamin' => 'L',
            'alamat_pemilik' => 'Link. Sumampir Timur No.108',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId19 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Vira Amalia',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Pakisaji Rt.01/10',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId20 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Iin Nurhayati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Perum. Taman Krakatau blok I 4 No.8',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId21 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Marta Yuliana',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Perum. Warnasari RKB 03 Rt. 01/05',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId22 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Murod',
            'jenis_kelamin' => 'L',
            'alamat_pemilik' => 'Link. Kalentemu Barat Rt.02/01',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId23 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Fatimah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Tegal Tong Rt.04/05 Kebonsari',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId24 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Liza',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Grand Cilegon Residence, Jl. Bouleved Raya No.87',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId25 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Hj Mastati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Jln Sunan Bonang Link. Penauan Rt. 01/01',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId26 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Alisa',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Ramanuju Rt.01/09',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId27 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Susanti',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Perum. Grand Sutera Cilegon Blok F7 No.15 Rt.18/02',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId28 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Rakhmawati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'PCI Blok D 97 No.17',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId29 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Siti Lailatul',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Bujang Gadung Rt.02/03 No.19',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId30 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Nurul Hayati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Griya Serdang Indah Blok B2 No.11',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId31 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Supandi',
            'jenis_kelamin' => 'L',
            'alamat_pemilik' => 'Link. Gempol Wetan Rt.04/02',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId32 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Imas Hayati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Bumiwaras Rt.04/03',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId33 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Jamilah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Temugiring',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId34 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Safrudin',
            'jenis_kelamin' => 'L',
            'alamat_pemilik' => 'Link. Wates Telu Rt. 17/05',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId35 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Terawati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Kelelet',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId36 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Irma Nurrahmi',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Ramanuju Tegal No.27A Rt.01/11',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId37 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Siti Maimanah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Leweung Sawo Rt.01/09',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId38 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Sri Suharni',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'BBS2 Jln Pala Blok A1 No.45 Rt.09/10',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId39 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Liza',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Sambi Manis Rt.02/05 No.11',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId40 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Ena R',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Telu',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId41 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Rosmawati',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Ramanuju Baru Tegal Rt.02/89',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId42 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Novita Purwanti',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Komp. Metro Florida Blok L06 No.7',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId43 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Sukiyatun',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Penyairan Atas Rt.02/08',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId44 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Mela',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Kamp. Ragas Grenyang',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId45 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Nurjanah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Cigading Rt.01/01',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId46 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Ifah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Link. Sambilawang Rt.01/03 Cibeber',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId47 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Yeyen Apriani',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Perum. Puri Krakatau Hijau Blok B1 No.4',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId48 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Ruhatiyah',
            'jenis_kelamin' => 'P',
            'alamat_pemilik' => 'Jl. Sunan Drajat Link. Kubang Welut Rt.03/04',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ownerId49 = DB::table('owners')->insertGetId([
            'nama_pemilik' => 'Dedi S',
            'jenis_kelamin' => 'L',
            'alamat_pemilik' => 'Perum. Griya Dringo Estate Blok J1 No.5 Rt.022/004 ',
            'kota_pemilik' => 'Cilegon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Insert data into jobs table
        DB::table('jobs')->insert([
            'owner_id' => $ownerId1,
            'nama_usaha' => 'Coklat Karakter',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '1 tahun',
            'nilai_pendanaan' => '1000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Terhambat karena kurangnya promosi yang baik',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId2,
            'nama_usaha' => 'Bintangs Cokies',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '7 tahun',
            'nilai_pendanaan' => '70000000',
            'sumber_pendanaan' => 'Dana Pribadi',
            'hambatan_usaha' => 'Kurangnya SDM pada produksi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId3,
            'nama_usaha' => 'Kedai mama putri',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '13 tahun',
            'nilai_pendanaan' => '30000000',
            'sumber_pendanaan' => 'Dana Bank',
            'hambatan_usaha' => 'Harga bahan yang meningkat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId4,
            'nama_usaha' => 'Catring Home Made',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '1000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Harga bahan baku masakan yang meningkat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId5,
            'nama_usaha' => 'All Fried Chicken',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '1000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Banyaknya pesaing didaerah tersebut',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId6,
            'nama_usaha' => 'Miya ollshop',
            'jenis_usaha_id' => 2,
            'lama_berdirinya_usaha' => '1 bulan',
            'nilai_pendanaan' => '1000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Pengadaan barang yang tidak menentu dari importir',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId7,
            'nama_usaha' => 'Hair Top Salon',
            'jenis_usaha_id' => 3,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '15000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Kendala dalam pemasaran serta kendala lainnya',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId8,
            'nama_usaha' => 'Rey Snack',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '2000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Kurangnya promosi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId9,
            'nama_usaha' => 'Dapoer Ayu Cookies',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '6 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Kurangnya SDM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId10,
            'nama_usaha' => 'Aneka Sabun Pembersih Rumah tangga',
            'jenis_usaha_id' => 4,
            'lama_berdirinya_usaha' => '2 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Terhambat karena kurangnya promosi yang baik.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId11,
            'nama_usaha' => 'Kripik',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '4 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Kemasan kripik yang kurang menarik',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId12,
            'nama_usaha' => 'Sate Bandeng Krakatau',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '8 tahun',
            'nilai_pendanaan' => '500000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Terhambat karena suplayer ikan yang tidak menentu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId13,
            'nama_usaha' => 'Cemilan Enin',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '1 tahun',
            'nilai_pendanaan' => '500000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Kurangnya promosi yang baik',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId14,
            'nama_usaha' => 'Mainan Anak-anak',
            'jenis_usaha_id' => 10,
            'lama_berdirinya_usaha' => '5 tahun',
            'nilai_pendanaan' => '1000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Penjualan yang kurang menentu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId15,
            'nama_usaha' => 'RK Cake & Cookies',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '4 tahun',
            'nilai_pendanaan' => '5000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Harga bahan baku yang meningkat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId16,
            'nama_usaha' => 'Cemilan Bu Mas',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '1000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Terhambat kaerana kurangnya SDM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId17,
            'nama_usaha' => 'Toko Kelontong',
            'jenis_usaha_id' => 11,
            'lama_berdirinya_usaha' => '5 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Menurunnya daya beli',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId18,
            'nama_usaha' => 'Toko Trion',
            'jenis_usaha_id' => 12,
            'lama_berdirinya_usaha' => '8 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Sedikitnya peminat costumer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId19,
            'nama_usaha' => 'Brownies Lumer',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '1 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Bahan baku yang tiba-tiba menigkat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId20,
            'nama_usaha' => 'Milk Jelly Bintang',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '4 tahun',
            'nilai_pendanaan' => '15000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Peminat yang berkurang',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId21,
            'nama_usaha' => 'Bebek Sambel Korek Dapur Bunda',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '4 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Kurangnya promosi yang membuat terbatasnya pelanggan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId22,
            'nama_usaha' => 'Telur Asin 2Putra Asli',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '13 tahun',
            'nilai_pendanaan' => '50000000',
            'sumber_pendanaan' => 'Dana Bank',
            'hambatan_usaha' => 'Meningkatnya harga bahan baku',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId23,
            'nama_usaha' => 'Putri Frozen',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '5 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Tidak adanya hambatan karena banyak peminat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId24,
            'nama_usaha' => 'Cireng Bawel',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '13 tahun',
            'nilai_pendanaan' => '5000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Penjualan yang tidak menentu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId25,
            'nama_usaha' => 'Olahan Daun Kelor Manajili',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '4 tahun',
            'nilai_pendanaan' => '5000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Kurangnya promosi sehingga sediktnya peminat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId26,
            'nama_usaha' => '"SUJAME" Susu Jahe Merah',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '4 tahun',
            'nilai_pendanaan' => '1000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Kurangnya supplayer bahan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId27,
            'nama_usaha' => 'Warung Ima',
            'jenis_usaha_id' => 11,
            'lama_berdirinya_usaha' => '18 tahun',
            'nilai_pendanaan' => '15000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Banyaknya pesaing didekat daerah tersebut',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId28,
            'nama_usaha' => 'Warung Pempek',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '5 tahun',
            'nilai_pendanaan' => '5000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Karena tidak memakai bahan pengawet jadi tidak tahan lama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId29,
            'nama_usaha' => 'Ayam Goreng Mbak Arum',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '2000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Hambatannnya tidak bisa menerima pelayanan jauh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId30,
            'nama_usaha' => 'Elzahirah Store',
            'jenis_usaha_id' => 2,
            'lama_berdirinya_usaha' => '4 bulan',
            'nilai_pendanaan' => '5000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Produk terbatas ketika banyak pesanan dari customer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId31,
            'nama_usaha' => 'Emping Melinjo Mak Sun',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '5 tahun',
            'nilai_pendanaan' => '20000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Bahan baku dari suplayer yang kurang menentu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId32,
            'nama_usaha' => 'Rengginang',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '2000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Karena proses penjemuran masih memanfaatkan pengeringan secara     manual, sehingga apabila musim hujan proses pembuatan membutuhkan waktu yang cukup lama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId33,
            'nama_usaha' => 'Keripik Pisang Rentul',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '4 tahun',
            'nilai_pendanaan' => '500000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Stok terbatas karena masih masih dilakukan secara manual',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId34,
            'nama_usaha' => 'Percetakan',
            'jenis_usaha_id' => 9,
            'lama_berdirinya_usaha' => '10 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Karena kurangnya karyawan jadi pelayanan yang lama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId35,
            'nama_usaha' => 'Tahu Sutera',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '8 tahun',
            'nilai_pendanaan' => '5000000',
            'sumber_pendanaan' => 'Dana bank',
            'hambatan_usaha' => 'Pengiriman yang agak rentan, karena tahu yang mudah hancur',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId36,
            'nama_usaha' => 'Geulis Hijab',
            'jenis_usaha_id' => 2,
            'lama_berdirinya_usaha' => '12 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Berkurangnya orderan karena banyaknya pesaing',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId37,
            'nama_usaha' => 'Bakso Cahaya',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '5 tahun',
            'nilai_pendanaan' => '3000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Harga bahan baku yang kurang stabil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId38,
            'nama_usaha' => 'Pelangi 412 Katering',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '3000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Harga bahan baku yang kurang stabil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId39,
            'nama_usaha' => 'Clover Honey dan Skin Care',
            'jenis_usaha_id' => 3,
            'lama_berdirinya_usaha' => '5 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Menghadapi protes konsumen yang tidak cocok dengan skincare ini',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId40,
            'nama_usaha' => 'Kerupuk tempe',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '7 tahun',
            'nilai_pendanaan' => '3000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Dikarenakan penjemuran masih dilakukan secara manual, apabila musim hujan terkendala maka produksi terhambat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId41,
            'nama_usaha' => 'Dimsum AMO',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '8 tahun',
            'nilai_pendanaan' => '1000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Terkendala jarak apabila konsumen memesan dengan jarak yang jauh, dikarenakan tidak memakai pengawet makanan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId42,
            'nama_usaha' => 'Aneka Sambel',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '6 tahun',
            'nilai_pendanaan' => '5000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Karena harga bahan baku yang tidak menentu ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId43,
            'nama_usaha' => 'Cilembu Bakar',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '2 tahun',
            'nilai_pendanaan' => '5000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Hambatannya suplayer yang terkadang ubi belum cukup panen',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId44,
            'nama_usaha' => 'Bolu Unyil',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '1 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Hambatannya karena bolu membutuhkan waktu pembuatan yang lama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId45,
            'nama_usaha' => 'Kue Bu Iyas',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '2 tahun',
            'nilai_pendanaan' => '10000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Karena kue basah tidak bisa bertahan cukup lama, maka bisa menyebabkan kerugian',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId46,
            'nama_usaha' => 'Keripik Bawang Duarr',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '6 tahun',
            'nilai_pendanaan' => '2000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Hambatannya dikarenakan kuerangnya SDM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId47,
            'nama_usaha' => 'Kacang Eksotis',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '2 tahun',
            'nilai_pendanaan' => '25000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Terkadang harga bahan baku yang melonjak tinggi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId48,
            'nama_usaha' => 'Roti Tape',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '7 tahun',
            'nilai_pendanaan' => '25000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Suplayer tape yang cukup lama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'owner_id' => $ownerId49,
            'nama_usaha' => 'Pecel Ayam Mamalika',
            'jenis_usaha_id' => 1,
            'lama_berdirinya_usaha' => '3 tahun',
            'nilai_pendanaan' => '15000000',
            'sumber_pendanaan' => 'Dana pribadi',
            'hambatan_usaha' => 'Harga bahan baku yang meningkat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
