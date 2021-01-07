<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diagnosas')->insert([
            'kode' => 'P001',
            'nama_diagnosa' => 'Demam Berdarah',
            'keterangan' => 'Jika dalam 2-3 hari gejala semakin memburuk seperti tampak lemas, muntah-muntah, mimisan, pendarahan gusi, dan sebagainya segeralah dibawa ke rumah sakit atau fasilitas pelayanan kesehatan terdekat untuk ditangani lebih lanjut.',
        ]);
    }
}
