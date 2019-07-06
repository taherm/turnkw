<?php

use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homes')->delete();
        
        \DB::table('homes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => '<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<h1 class="text-center">Welcome to Turn</h1>
<h2 class="text-center">We hope that you\'ll find inspiration here!</h2>
<h3 class="text-center">We provide clients with the highest possible level of service anywhere in the area.</h3>
<h4 class="text-center">From concept through construction, to the finishing touches of each of your projects, you can rely on our team to deliver a personal environment tailored specifically for you. By interpreting an individual client&rsquo;s style and needs, our licensed designers can successfully incorporate function while following current fashion trends.</h4>
</div>
</div>
</div>',
                'created_at' => NULL,
                'updated_at' => '2019-07-06 15:12:33',
            ),
        ));
        
        
    }
}