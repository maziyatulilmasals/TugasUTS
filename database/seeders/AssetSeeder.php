<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assets')->insert([
            [
                'assetCode' => 'AA01',
                'assetName' => 'Monitor',
                'assetPrice'=> 1000,
                'assetDescription' => 'Monitor SVGA - Samsung 14"',
                'type_id' => 1
            ],
            [
                'assetCode' => 'BC02',
                'assetName' => 'Cisco Packet Tracer',
                'assetPrice'=> 7878,
                'assetDescription' => 'Cisco Ver 8.2.1' ,
                'type_id' => 2
            ],
            [
                'assetCode' => 'DE03',
                'assetName' => 'Modul Praktikum',
                'assetPrice'=> 687,
                'assetDescription' => 'Dokumen Praktikum',
                'type_id' => 3
            ],
        ]);
    }
}
