<?php

use Illuminate\Database\Seeder;
use App\Pelanggan;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Pelanggan::class)->create();
        
    }
}
