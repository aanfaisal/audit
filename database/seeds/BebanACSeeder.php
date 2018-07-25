<?php

use Illuminate\Database\Seeder;

class BebanACSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        $limit = 100;
        //$faker->randomElement(['seller', 'buyer']),
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('beban_acs')->insert([
                //'nm_ruang' => $faker->randomElement(['D1.01', 'D1.02', 'D1.03', 'D1.04', 'D1.05', 'D1.06', 'D2.01', 'D2.02', 'D2.03', 'D2.04', 'D2.05', 'D2.06', 'D2.07', 'D2.08', 'D2.09', 'D3.01', 'D3.02', 'D3.03', 'D3.04', 'D3.05', 'D3.06', 'D3.07', 'D3.08']),

                'ruang_id' => $faker->randomElement(['8','9','10','11', '12','13','14','15','16','17','18','19','20','21', '22','23','24','25','26','27']),
                'jml_ac' => $faker->randomElement(['2', '4']),
                'daya_ac' => $faker->randomElement(['735', '1470', '368']),
                'tot_pemakaian' => $faker->randomElement(['5', '8', '10', '15', '12', '7']),
                //'wktu_pengukuran' => $faker->dateTimeInInterval($startDate = '-30 days', $interval = '+ 1 days', $timezone = 'Asia/Jakarta')
                'wktu_pengukuran' => $faker->dateTimeBetween('-30 days','+2 days'), //Asia / Jakarta
            ]);
        }
    }
}
