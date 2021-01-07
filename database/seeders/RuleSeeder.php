<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insert([
            'rule' => 'IF Pendarahan gusi / mimisan
            AND demam tinggi
            AND pusing & nyeri di belakang mata
            AND nyeri ulu hati
            AND lemah, letih, lesu
            AND nyeri sendi
            AND bintik merah pada kulit
            AND demam lalu di beri obat turun seperti sembuh
            AND perut terasa mual
            AND kaki dan tangan terasa dingin
            AND riwayat pernah menderita DBD
            AND Buang Air Besar hitam
            AND lingkungan terinfeksi dbd
            AND Tekanan darah rendah
            AND sakit kepala parah
            AND Insomnia
            AND Pendarahan Berat
            AND hilang selera makan
            AND Diare
            THEN Demam Berdarah
            ',
        ]);
    }
}
