<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturerRecords=[
          ['id'=>1,'manufacturerName'=>"Beximco Pharma"]
        ];

        DB::table('Manufacturers')->insert($manufacturerRecords);
    }
}
