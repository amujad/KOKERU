<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class logSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $date->toDateString();
        for($i=1;$i<31;$i++){
            $data = [
                [
                    'ruang' => 'A101',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A102',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A103',
                    'PenanggungJawab' => 'Susilo',                    
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A201',
                    'PenanggungJawab' => 'Susilo',                    
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A202',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A203',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A204',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A301',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A302',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A303',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
                [
                    'ruang' => 'A304',
                    'PenanggungJawab' => 'Susilo',
                    'status' => 'Sudah',
                    'tanggal'=> $date,
                    'bukti'=>'tidak ada'
                ],
            ];
            Schema::disableForeignKeyConstraints();
            foreach ($data as $key=>$value) {
                DB::table('logStatusKebersihan')->insert([
                    $key => $value,
                ]);
            }
            $date = $date->subDay(1);
        }
    }
}
