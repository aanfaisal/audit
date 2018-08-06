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
            array('ruang_id' => 1, 'nm_ruang' => 'D1.01', 'luas_ruang' => '78.88', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '6', 'daya_lamp' => '25', 'nmbebanac' => '', 'jml_ac' => '0', 'daya_ac' => '0', 'jnsbebanlain' => '["Kipas Angin","Komputer Standar"]', 'jmlbebanlain' => '["2","1","1"]', 'dyabebanlain' => '490', 'nm_mesin' =>'["","",""]', 'jml_mesin' => '2', 'daya_mesin' => '2500'),

            array('ruang_id' => 2, 'nm_ruang' => 'D1.02', 'luas_ruang' => '40.8', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '', 'jml_ac' => '0', 'daya_ac' => '0', 'jnsbebanlain' => '["Kipas Angin","Laptop 14","Komputer Standar","Printer Epson IP2770"]', 'jmlbebanlain' => '4', 'dyabebanlain' => '["385"]', 'nm_mesin' =>'["","",""]', 'jml_mesin' => '2', 'daya_mesin' => '2500'),

            array('ruang_id' => 3, 'nm_ruang' => 'D1.03', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '[""]', 'jml_ac' => '0', 'daya_ac' => '0', 'jnsbebanlain' => '["Komputer Uji Tarik","Printer Epson IP2770","Komputer Mikroskop","Kipas Angin","Komputer HighEnd"]', 'jmlbebanlain' => '["1","1","1","1","1"]', 'dyabebanlain' => '["915"]', 'nm_mesin' =>'["","",""]', 'jml_mesin' => '2', 'daya_mesin' => '2500'),

            array('ruang_id' => 4, 'nm_ruang' => 'D1.04', 'luas_ruang' => '12.6', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["Printer Epson IP2770","Komputer HighEnd","Laptop 14","Dispenser"]', 'jmlbebanlain' => '["1","14","2","1"]', 'dyabebanlain' => '["5925"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '0', 'daya_mesin' => '0'),

            array('ruang_id' => 5, 'nm_ruang' => 'D1.05', 'luas_ruang' => '66.64', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '6', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung","Daikin"]', 'jml_ac' => '["1","1","1"]', 'daya_ac' => '["746","746","755"]', 'jnsbebanlain' => '["Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'0', 'jml_mesin' => '0', 'daya_mesin' => ''),

            array('ruang_id' => 6, 'nm_ruang' => 'D1.06', 'luas_ruang' => '78.88', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","755"]', 'jnsbebanlain' => '["Kipas Angin","Dispenser"]', 'jmlbebanlain' => '["2","1"]', 'dyabebanlain' => '["220", "450"]', 'nm_mesin' =>'["","",""]', 'jml_mesin' => '2', 'daya_mesin' => '2500'),

            array('ruang_id' => 7, 'nm_ruang' => 'D1.07', 'luas_ruang' => '42.12', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '', 'jml_ac' => '0', 'daya_ac' => ''0, 'jnsbebanlain' => '["Kipas Angin","",""]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '100', 'nm_mesin' =>'["","",""]', 'jml_mesin' => '2', 'daya_mesin' => '2500'),
            

            array('ruang_id' => 8, 'nm_ruang' => 'D2.01', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung"]', 'jml_ac' => '["1"]', 'daya_ac' => '["746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

            array('ruang_id' => 9, 'nm_ruang' => 'D2.02', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin"]', 'jml_ac' => '["1"]', 'daya_ac' => '["755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

            array('ruang_id' => 10, 'nm_ruang' => 'D2.03', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung"]', 'jml_ac' => '["1"]', 'daya_ac' => '["777"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

            array('ruang_id' => 11, 'nm_ruang' => 'D2.04', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung"]', 'jml_ac' => '["1"]', 'daya_ac' => '["746"]', 'jnsbebanlain' => '["Komputer HighEnd"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

            array('ruang_id' => 12, 'nm_ruang' => 'D2.05', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["777","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

            array('ruang_id' => 13, 'nm_ruang' => 'D2.06', 'luas_ruang' => '66.64', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung","Samsung"]', 'jml_ac' => '["1","1","1"]', 'daya_ac' => '["746","746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

            array('ruang_id' => 14, 'nm_ruang' => 'D2.07', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["777","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

            array('ruang_id' => 15, 'nm_ruang' => 'D2.08', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["777","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

            array('ruang_id' => 16, 'nm_ruang' => 'D2.09', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

           array('ruang_id' => 17, 'nm_ruang' => 'D3.01', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin","Daikin","Samsung"]', 'jml_ac' => '["1","1","1"]', 'daya_ac' => '["1063","755","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

           array('ruang_id' => 18, 'nm_ruang' => 'D3.02', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","765"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

           array('ruang_id' => 19, 'nm_ruang' => 'D3.03', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["0","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           
           array('ruang_id' => 20, 'nm_ruang' => 'D3.04', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["755","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           
           array('ruang_id' => 21, 'nm_ruang' => 'D3.05', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["755","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

           array('ruang_id' => 22, 'nm_ruang' => 'D3.06', 'luas_ruang' => '66.64', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin","Daikin","Daikin"]', 'jml_ac' => '["1","1","1"]', 'daya_ac' => '["755","755","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           
           array('ruang_id' => 23, 'nm_ruang' => 'D3.07', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 24, 'nm_ruang' => 'D3.08', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 25, 'nm_ruang' => 'D3.09', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           
           array('ruang_id' => 26, 'nm_ruang' => 'Selasar Lt 1', 'luas_ruang' => '80.54', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 27, 'nm_ruang' => 'Selasar Lt 2', 'luas_ruang' => '80.54', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 28, 'nm_ruang' => 'Selasar Lt 3', 'luas_ruang' => '80.54', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),
           array('ruang_id' => 29, 'nm_ruang' => 'Halaman', 'luas_ruang' => '1500', 'jns_lamp' => 'Lampu Halogen', 'jml_lamp' => '2', 'daya_lamp' => '1000', 'nmbebanac' => '["Samsung","Daikin","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'', 'jml_mesin' => '', 'daya_mesin' => ''),

        );

        //masukkan data array ke database
        DB::table('ruangs')->insert($post);


    }
}
