<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataasetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('totals')->insert([
            'kode' => '1.2.50000.00',
            'nama' => 'susu bayi'
        ]);
    }
}
