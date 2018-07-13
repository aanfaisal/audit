<?php

use Illuminate\Database\Seeder;

class HItungIKESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        $limit = 300;
        //$faker->randomElement(['seller', 'buyer']),

        for ($i = 0; $i < $limit; $i++) {
            DB::table('hitung_ikes')->insert([
                //'daya_beban' => $faker->numberBetween($min = 24, $max = 240),
                //'tot_pemakaian' => $faker->randomElement(['1', '5', '8', '10', '15', '12', '7']),
                //'wktu_pengukuran' => $faker->dateTimeInInterval($startDate = '-30 days', $interval = '+ 1 days', $timezone = 'Asia/Jakarta')
                'wktu_pengukuran' => $faker->dateTimeBetween('-30 days', '+2 days'), //Asia / Jakarta
                'hsil_perhitungan' => $faker->randomElement(['12.5', '13.5', '13.2', '14,7', '13,3', '14,6', '13,7', '12,8', '13'])
            ]);
        }
    }
}
