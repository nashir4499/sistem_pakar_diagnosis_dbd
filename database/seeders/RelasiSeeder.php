<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relasis')->insert([
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G001',
                'cf' => '0.8',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G002',
                'cf' => '0.9',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G003',
                'cf' => '0.5',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G004',
                'cf' => '0.7',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G005',
                'cf' => '0.6',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G006',
                'cf' => '0.6',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G007',
                'cf' => '0.7',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G008',
                'cf' => '0.9',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G009',
                'cf' => '0.6',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G010',
                'cf' => '0.7',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G011',
                'cf' => '0.7',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G012',
                'cf' => '0.8',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G013',
                'cf' => '0.9',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G014',
                'cf' => '0.7',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G015',
                'cf' => '0.7',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G016',
                'cf' => '0.4',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G017',
                'cf' => '0.6',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G018',
                'cf' => '0.6',
            ],
            [
                'diagnosas_id' => 'P001',
                'gejalas_id' => 'G019',
                'cf' => '0.8',
            ],
        ]);
    }
}
