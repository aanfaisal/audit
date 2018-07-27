<?php

use Illuminate\Database\Seeder;

class BebanPeneranganSeeder extends Seeder
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
            DB::table('beban_penerangans')->insert([
                //'nm_ruang' => $faker->randomElement(['D1.01', 'D1.02', 'D1.03', 'D1.04', 'D1.05', 'D1.06', 'D2.01', 'D2.02', 'D2.03', 'D2.04', 'D2.05', 'D2.06', 'D2.07', 'D2.08', 'D2.09', 'D3.01', 'D3.02', 'D3.03', 'D3.04', 'D3.05', 'D3.06', 'D3.07', 'D3.08']),
                'ruang_id' => $faker->randomElement(['1', '2','3','4','5','6','7','8','9','10','11', '12','13','14','15','16','17','18','19','20','21', '22','23','24','25','26','27']),
                'jns_lamp' => $faker->randomElement(['Lampu Halogen', 'Lampu TL', 'Lampu Hemat Energi']),
                'jml_lamp' => $faker->randomElement(['2', '4']),
                'daya_lamp' => $faker->numberBetween($min = 24, $max = 240),
                'tot_pemakaian' => $faker->randomElement(['1', '5', '8', '10', '15', '12', '7']),
                //'wktu_pengukuran' => $faker->dateTimeInInterval($startDate = '-30 days', $interval = '+ 1 days', $timezone = 'Asia/Jakarta')
                'wktu_pengukuran' => $faker->dateTimeBetween('-30 days', '+2 days'), //Asia / Jakarta
            ]);
        }
    }
}
