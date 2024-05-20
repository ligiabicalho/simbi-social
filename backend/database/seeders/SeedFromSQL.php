<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedFromSQL extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents('./database/seeders/tb_projeto_rouanet_teste.sql');

        DB::unprepared($sql);
    }
}
