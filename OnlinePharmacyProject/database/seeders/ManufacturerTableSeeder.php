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
          ['id'=>1,'manufacturerName'=>"Beximco Pharma"],
          ['id'=>2,'manufacturerName'=>"Incepta Pharma"],
          ['id'=>3,'manufacturerName'=>"Acme"],
          ['id'=>4,'manufacturerName'=>"Drug International"]
        ];

        DB::table('Manufacturers')->insert($manufacturerRecords);
    }
}
