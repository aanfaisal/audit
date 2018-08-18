<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(RuangSeeder::class);
        $this->call(BebanACSeeder::class);
        // $this->call(BebanLainSeeder::class);
        // $this->call(BebanMesinSeeder::class);
        // $this->call(BebanPeneranganSeeder::class);
        // $this->call(HItungIKESeeder::class);
        //$this->call(ProfilSeeder::class);
        

        //$this->call(LaratrustSeeder::class);
    }
}
