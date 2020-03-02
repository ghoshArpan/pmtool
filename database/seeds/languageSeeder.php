<?php

use Illuminate\Database\Seeder;
use App\tbl_languages;
class languageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        


$data = [
    ['language_name'=>'Web Design','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
    ['language_name'=>'php','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
    ['language_name'=>'java','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
    ['language_name'=>'Angular','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
    ['language_name'=>'Android','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
    ['language_name'=>'Wordpress','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
    //...
];

tbl_languages::insert($data);
    }
}
