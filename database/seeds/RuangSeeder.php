<?php

use Illuminate\Database\Seeder;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //ngosongin tabel
        DB::table('ruangs')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array(
            array('ruang_id' => 1, 'nm_ruang' => 'D1.01', 'luas_ruang' => '500', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => '', 'jml_ac' => '', 'daya_ac' => '', 'jnsbebanlain' => 'Kipas', 'jmlbebanlain' => '1', 'dyabebanlain' => '100', 'nm_mesin' =>'CNC', 'jml_mesin' => '2', 'daya_mesin' => '2500'),
            array('ruang_id' => 2, 'nm_ruang' => 'D1.02', 'luas_ruang' => '500', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => '', 'jml_ac' => '', 'daya_ac' => '', 'jnsbebanlain' => 'Kipas', 'jmlbebanlain' => '1', 'dyabebanlain' => '100', 'nm_mesin' =>'CNC', 'jml_mesin' => '2', 'daya_mesin' => '2500'),
            array('ruang_id' => 3, 'nm_ruang' => 'D1.03', 'luas_ruang' => '500', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => '', 'jml_ac' => '', 'daya_ac' => '', 'jnsbebanlain' => 'Kipas', 'jmlbebanlain' => '1', 'dyabebanlain' => '100', 'nm_mesin' =>'CNC', 'jml_mesin' => '2', 'daya_mesin' => '2500'),
            array('ruang_id' => 4, 'nm_ruang' => 'D1.04', 'luas_ruang' => '500', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => '', 'jml_ac' => '', 'daya_ac' => '', 'jnsbebanlain' => 'Kipas', 'jmlbebanlain' => '1', 'dyabebanlain' => '100', 'nm_mesin' =>'CNC', 'jml_mesin' => '2', 'daya_mesin' => '2500'),
            array('ruang_id' => 5, 'nm_ruang' => 'D1.05', 'luas_ruang' => '500', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => '', 'jml_ac' => '', 'daya_ac' => '', 'jnsbebanlain' => 'Kipas', 'jmlbebanlain' => '1', 'dyabebanlain' => '100', 'nm_mesin' =>'CNC', 'jml_mesin' => '2', 'daya_mesin' => '2500'),
            array('ruang_id' => 6, 'nm_ruang' => 'D1.06', 'luas_ruang' => '500', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => '', 'jml_ac' => '', 'daya_ac' => '', 'jnsbebanlain' => 'Kipas', 'jmlbebanlain' => '1', 'dyabebanlain' => '100', 'nm_mesin' =>'CNC', 'jml_mesin' => '2', 'daya_mesin' => '2500'),
            array('ruang_id' => 7, 'nm_ruang' => 'D1.07', 'luas_ruang' => '500', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => '', 'jml_ac' => '', 'daya_ac' => '', 'jnsbebanlain' => 'Kipas', 'jmlbebanlain' => '1', 'dyabebanlain' => '100', 'nm_mesin' =>'CNC', 'jml_mesin' => '2', 'daya_mesin' => '2500'),
            

            array('ruang_id' => 8, 'nm_ruang' => 'D2.01', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
            array('ruang_id' => 9, 'nm_ruang' => 'D2.02', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
            array('ruang_id' => 10, 'nm_ruang' => 'D2.03', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
            array('ruang_id' => 11, 'nm_ruang' => 'D2.04', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
            array('ruang_id' => 12, 'nm_ruang' => 'D2.05', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
            array('ruang_id' => 13, 'nm_ruang' => 'D2.06', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
            array('ruang_id' => 14, 'nm_ruang' => 'D2.07', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
            array('ruang_id' => 15, 'nm_ruang' => 'D2.08', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
            array('ruang_id' => 16, 'nm_ruang' => 'D2.09', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

           array('ruang_id' => 17, 'nm_ruang' => 'D3.01', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 18, 'nm_ruang' => 'D3.02', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 19, 'nm_ruang' => 'D3.03', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 20, 'nm_ruang' => 'D3.04', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 21, 'nm_ruang' => 'D3.05', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 22, 'nm_ruang' => 'D3.06', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 23, 'nm_ruang' => 'D3.07', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 24, 'nm_ruang' => 'D3.08', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 1, 'nm_ruang' => 'D3.09', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

           array('ruang_id' => 1, 'nm_ruang' => 'Selasar', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 1, 'nm_ruang' => 'Halaman', 'luas_ruang' => '400', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '150', 'nmbebanac' => 'Samsung', 'jml_ac' => '2', 'daya_ac' => '786', 'jnsbebanlain' => 'LCD Projector', 'jmlbebanlain' => '1', 'dyabebanlain' => '320', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

        );

        //masukkan data array ke database
        DB::table('ruangs')->insert($post);










        // $faker = Faker\Factory::create('id_ID');

        // $limit = 100;
        // //$faker->randomElement(['seller', 'buyer']),

        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('ruangs')->insert([
        //         'nm_ruang' => $faker->randomElement(['D1.01', 'D1.02', 'D1.03', 'D1.04', 'D1.05', 'D1.06', 'D2.01', 'D2.02', 'D2.03', 'D2.04', 'D2.05', 'D2.06', 'D2.07', 'D2.08', 'D2.09', 'D3.01', 'D3.02', 'D3.03', 'D3.04', 'D3.05', 'D3.06', 'D3.07', 'D3.08']),
        //         'luas_ruang' => $faker->randomElement(['300', '500', '600']),
        //         'tot_dayapenerangan' => $faker->numberBetween($min = 240, $max = 1000),
        //         'tot_dayaac' => $faker->numberBetween($min = 240, $max = 1000),
        //         'tot_dayalain' => $faker->numberBetween($min = 240, $max = 1000),
        //         'tot_dayamesin' => $faker->numberBetween($min = 500, $max = 2000),
        //     'nilai_IKE' => $faker->randomElement(['12.5', '13.5', '13.2', '14,7', '13,3', '14,6', '13,7', '12,8', '13']),
        //         //'wktu_pengukuran' => $faker->dateTimeInInterval($startDate = '-30 days', $interval = '+ 1 days', $timezone = 'Asia/Jakarta')
        //         //'wktu_pengukuran' => $faker->dateTimeBetween('-30 days', '+2 days'), //Asia / Jakarta
        //     ]);
        // }
    }
}
