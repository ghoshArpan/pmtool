<?php

use Illuminate\Database\Seeder;
use App\tbl_leave_types;
class leaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['leave_type_name'=>'Casual Leave'],
            ['leave_type_name'=>'Sick Leave'],
            ['leave_type_name'=>'Maternity Leave'],
            ['leave_type_name'=>'Earned Leave'],
           
            //...
        ];
        
        tbl_leave_types::insert($data);
    }
}
