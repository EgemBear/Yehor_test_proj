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
        // $this->call(UsersTableSeeder::class);
    }
}

class ProdSeeder extends Seeder
{

    public function run()
    {
       DB::table('production') ->delete();
       DB::table('photo') ->delete();

    }
}
