<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
            'description' => '<p>Turn Design &amp; Build was Established in 2007 by Eng. Mohamad G. Moustapha (Abo Ghassan). The idea was inspired by the expansion market of Kuwait since that time till today as a result of a new generation of Designs &amp; Technology were involved. Kuwait Market is always full of challengers and Entrepreneurs who are carried away with their dreams and we would like to be part of their dreams. Therefore, our main objective is to make their dreams come true through our designs because we always have them on our minds as the new generation with lots to office back to the community. Turn Design &amp; Build has been in the market with its unique designs that has been fulfilling all clients&rsquo; needs with a 100% satisfaction whether in carrying out projects or maintenances. we have designed, renovated and redesigned high end Stores and Booths for all of Zain, Ooredoo, &amp; Viva besides Restaurants, Call Centers, Optics, Spas, Saloons, Coffee Shops, Electronic stores, Catering Kitchens, &amp; Meeting rooms projects throughout Kuwait cities and of course including our own head office.</p>
<p>Thanks to our amazing clients, our incredible partners, our dear friends and our wonderful families for a fantastic, challenging, stimulating, rewarding, sometimes nerve-racking, never boring, always satisfying, and in the end, truly epic years.</p>',
                'created_at' => NULL,
                'updated_at' => '2019-07-06 15:13:21',
            ),
        ));
        
        
    }
}