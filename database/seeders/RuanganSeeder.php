<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ruang = [
            [
                'nama' => 'A101',
                'cs_id' => 2,
                'status' => 'Sudah'
            ],
            [
                'nama' => 'A102',
                'cs_id' => 2,
                'status' => 'Sudah'
            ],
            [
                'nama' => 'A103',
                'cs_id' => 2,
                'status' => 'Belum'
            ],
            [
                'nama' => 'A201',
                'cs_id' => 2,
                'status' => 'Sudah'
            ],
            [
                'nama' => 'A202',
                'cs_id' => 2,
                'status' => 'Belum'
            ],
            [
                'nama' => 'A203',
                'cs_id' => 2,
                'status' => 'Belum'
            ],
            [
                'nama' => 'A204',
                'cs_id' => 2,
                'status' => 'Sudah'
            ],
            [
                'nama' => 'A301',
                'cs_id' => 2,
                'status' => 'Belum'
            ],
            [
                'nama' => 'A302',
                'cs_id' => 2,
                'status' => 'Sudah'
            ],
        ];
        Schema::disableForeignKeyConstraints();
        foreach ($ruang as $key=>$value) {
            DB::table('ruangan')->insert([
                $key => $value,
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
