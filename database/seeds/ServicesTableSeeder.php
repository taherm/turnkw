<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'menu_id' => 2,
                'id' => 1,
                'title_en' => 'Vision',
                'title_ar' => NULL,
                'description_en' => '<p>A new dimension is added in all aspects of life with design, innovation, and achievement of the best quality, leading the industry with competitiveness and team spirit, and becoming the most successful design company in our region</p>',
                'description_ar' => NULL,
                'image' => 'e15dc17ae9196e6ae47d29104a8077a9.png',
                'created_at' => '2019-07-07 16:28:58',
                'updated_at' => '2019-07-07 16:28:58',
            ),
            1 => 
            array (
                'menu_id' => 2,
                'id' => 2,
                'title_en' => 'Mission',
                'title_ar' => NULL,
                'description_en' => '<p>A brand is created to add more precious value to the world&rsquo;s success and beauty.</p>',
                'description_ar' => NULL,
                'image' => 'ed39bb6073f6e51f3af1b34a67b4a13c.png',
                'created_at' => '2019-07-07 16:29:24',
                'updated_at' => '2019-07-07 16:29:24',
            ),
            2 => 
            array (
                'menu_id' => 2,
                'id' => 3,
                'title_en' => 'Values',
                'title_ar' => NULL,
                'description_en' => '<p>Achievement,Challenge,Competency,Creativity ,Honesty ,Loyalty ,Service ,Success</p>',
                'description_ar' => NULL,
                'image' => 'd5962907448c4bd941138de877c38a97.png',
                'created_at' => '2019-07-07 16:29:55',
                'updated_at' => '2019-07-07 16:29:55',
            ),
        ));
        
        
    }
}