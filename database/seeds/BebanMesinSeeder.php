<?php

use Illuminate\Database\Seeder;

class BebanMesinSeeder extends Seeder
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
            DB::table('beban_mesins')->insert([
                //'nm_ruang' => $faker->randomElement(['D1.01', 'D1.02', 'D1.03', 'D1.04', 'D1.06']),
                'nm_ruang' => $faker->randomElement(['1', '2','3','4','5','6','7']),
                'nm_mesin' => $faker->randomELement(['Mesin Bubut', 'Mesin Frais', 'Mesin CNC', 'Mesin Sekrap', 'Mesin Gergaji', 'Mesin Gerinda', 'Mesin Las Listrik', 'Mesin Las Argon', 'Mesin Bor Tangan', 'Mesin Heater', 'Mesin Spinner', 'Mesin Oven', 'Mesin Mixer']),
                'daya_mesin' => $faker->numberBetween($min = 520, $max = 1200),
                'tot_pemakaian' => $faker->randomElement(['1','4', '5', '8', '10', '15', '12', '7', '9', '2', '3']),
                //'wktu_pengukuran' => $faker->dateTimeInInterval($startDate = '-30 days', $interval = '+ 1 days', $timezone = 'Asia/Jakarta')
                'wktu_pengukuran' => $faker->dateTimeBetween('-30 days', '+2 days'), //Asia / Jakarta
            ]);
        }
    }
}
