<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title_en' => 'Services',
                'title_ar' => 'خدماتنا ',
                'created_at' => '2018-06-06 19:29:27',
                'updated_at' => '2018-06-06 19:29:27',
            ),
        ));
        
        
    }
}