<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(HomesTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
    }
}
