<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Apotek ReAn Farma',
            'alamat' => 'Jl. Pangeran Natadirja, Kota Bengkulu',
            'telepon' => '0895622090988',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/logo1.png',
            'path_kartu_member' => '/img/member.png',
        ]);
    }
}
