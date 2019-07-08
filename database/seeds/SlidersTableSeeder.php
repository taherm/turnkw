<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 3,
                'image' => '38f91cd4a5d68e4c72049b45bab65d25.jpg',
                'created_at' => '2019-07-08 08:23:43',
                'updated_at' => '2019-07-08 08:23:43',
            ),
        ));
        
        
    }
}