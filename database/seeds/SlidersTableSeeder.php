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
                'id' => 4,
                'image' => '76d735728b1d06470cbfe5c1807b288e.jpg',
                'created_at' => '2019-07-12 07:22:22',
                'updated_at' => '2019-07-12 07:22:22',
            ),
        ));
        
        
    }
}