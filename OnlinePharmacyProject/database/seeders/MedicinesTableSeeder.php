<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicine;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $medicineRecords=[
          ['id'=>1,'manufacturerId'=>'1','medicineName'=>'Amdocal plus 50','generic'=>'Atenolol Bp 25mg & Amlodipine BP',
          'type'=>'Tablet','quantity'=>'10','dose'=>'50mg/tablet','medicinePrice'=>'60','stock'=>'10','description'=>'AAA','medicineImage'=>'11.jpg']
        ];

        Medicine::insert($medicineRecords);
    }
}
