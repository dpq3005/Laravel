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
        // $this->call(UserSeeder::class);
        DB::table('restaurants')->insert([
            'name'=> Str::random(10),
            'email'=>Str::random(10),
            'address'=>Str::random(10)
        ]);
    }
}
