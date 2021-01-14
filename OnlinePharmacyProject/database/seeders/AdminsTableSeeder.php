<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords=[
          ['id'=>1,'firstName'=>'Mehedi','lastName'=>'Rahman',
              'mobile'=>'01916881718','userName'=>'mehedi','email'=>'mehedi.rahman01@northsouth.edu',
              'password'=>'$2y$10$bzPij8Qtmoy19Z.Xzg9xC.ithidCyxyMYGIHAT7qVjTT0x0LpnovW','status'=>'1'
          ],
        ];

        DB::table('admins')->insert($adminRecords);

    }
}
