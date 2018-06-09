<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$86rzdTASQcGgFAhaWzBZI.9xUeHlpTo5Lo8V0Bbzw9wmTYv8XHoZe',
                'remember_token' => NULL,
                'created_at' => '2018-06-09 10:12:41',
                'updated_at' => '2018-06-09 10:12:41',
            ),
        ));
        
        
    }
}