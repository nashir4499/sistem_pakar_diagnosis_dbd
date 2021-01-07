<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gejalas')->insert([
            [
                'kode' => 'G001',
                'nama_gejala' => 'Pendarahan Gusi / Mimisan',
                'keterangan' => '',
            ],
            [
                'kode' => 'G002',
                'nama_gejala' => 'Demam Tinggi',
                'keterangan' => '',
            ],
            [
                'kode' => 'G003',
                'nama_gejala' => 'Nyeri Di Belakang Mata',
                'keterangan' => '',
            ],
            [
                'kode' => 'G004',
                'nama_gejala' => 'Nyeri Di Ulu Hati',
                'keterangan' => '',
            ],
            [
                'kode' => 'G005',
                'nama_gejala' => 'Lemah, Letih, dan Lesu',
                'keterangan' => '',
            ],
            [
                'kode' => 'G006',
                'nama_gejala' => 'Nyeri Di Persendian',
                'keterangan' => '',
            ],
            [
                'kode' => 'G007',
                'nama_gejala' => 'Bintik Merah Pada Kulit',
                'keterangan' => '',
            ],
            [
                'kode' => 'G008',
                'nama_gejala' => 'Demam Seperti Sembuh Saat Diberikan Obat Penurun Panas',
                'keterangan' => '',
            ],
            [
                'kode' => 'G009',
                'nama_gejala' => 'Perut Terasa Mual',
                'keterangan' => '',
            ],
            [
                'kode' => 'G010',
                'nama_gejala' => 'Kaki dan Tangan Terasa Dingin',
                'keterangan' => '',
            ],
            [
                'kode' => 'G011',
                'nama_gejala' => 'Riwayat Pernah Sakit DBD',
                'keterangan' => '',
            ],
            [
                'kode' => 'G012',
                'nama_gejala' => 'Buang Air Besar Berwarna Hitam',
                'keterangan' => '',
            ],
            [
                'kode' => 'G013',
                'nama_gejala' => 'Lingkungan Tempat Tinggal Terinfeksi DBD',
                'keterangan' => '',
            ],
            [
                'kode' => 'G014',
                'nama_gejala' => 'Tekanan Darah Rendah',
                'keterangan' => '',
            ],
            [
                'kode' => 'G015',
                'nama_gejala' => 'Sakit Kepala Parah',
                'keterangan' => '',
            ],
            [
                'kode' => 'G016',
                'nama_gejala' => 'Insomnia',
                'keterangan' => '',
            ],
            [
                'kode' => 'G017',
                'nama_gejala' => 'Pendarahan Berat',
                'keterangan' => '',
            ],
            [
                'kode' => 'G018',
                'nama_gejala' => 'Hilang Selera Makan',
                'keterangan' => '',
            ],
            [
                'kode' => 'G019',
                'nama_gejala' => 'Diare',
                'keterangan' => '',
            ],
        ]);
    }
}
