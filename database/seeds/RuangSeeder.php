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
            array('ruang_id' => 1, 'nm_ruang' => 'D1.01', 'luas_ruang' => '78.88', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '6', 'daya_lamp' => '25', 'nmbebanac' => '[""]', 'jml_ac' => '[""]', 'daya_ac' => '[""]', 'jnsbebanlain' => '["Kipas Angin","Komputer Standar"]', 'jmlbebanlain' => '["2","1"]', 'dyabebanlain' => '["240","250"]', 'nm_mesin' =>'["Mesin Frais CNC ZNK320","Mesin Bubut CNC ZNK360","Alat Uji Prestasi Motor Listrik","Alat Uji Prestasi Pompa","Alat Uji Prestasi Mesin Pendingin","Alat Uji Prestasi Motor Turet","Alat Uji Prestasi Motor Brake","Alat Uji Heat Transfer","Alat Uji Momentum Jet","Alat Uji Kerugian Perpipaan","Alat Uji Bending Momen"]', 'jml_mesin' => '["1","1","1","1","1","1","1","1","1","1","1"]', 'daya_mesin' => '["5100","5130","3000","125","320","320","600","600","125","150","350"]'),

            array('ruang_id' => 2, 'nm_ruang' => 'D1.02', 'luas_ruang' => '40.8', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '[""]', 'jml_ac' => '[""]', 'daya_ac' => '[""]', 'jnsbebanlain' => '["Kipas Angin","Laptop 14","Komputer Standar","Printer Epson IP2770"]', 'jmlbebanlain' => '["1","1","1","1"]', 'dyabebanlain' => '["45","70","250","11"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 3, 'nm_ruang' => 'D1.03', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '[""]', 'jml_ac' => '[""]', 'daya_ac' => '[""]', 'jnsbebanlain' => '["Komputer Uji Tarik","Printer Epson IP2770","Kipas Angin","Komputer HighEnd"]', 'jmlbebanlain' => '["1","1","1","1","1"]', 'dyabebanlain' => '["250","11","50","350"]', 'nm_mesin' =>'["Alat Poles","Alat Metalografi"]', 'jml_mesin' => '["1","1"]', 'daya_mesin' => '["350","250"]'),

            array('ruang_id' => 4, 'nm_ruang' => 'D1.04', 'luas_ruang' => '12.6', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["Printer Epson IP2770","Komputer HighEnd","Laptop 14","Dispenser"]', 'jmlbebanlain' => '["1","14","2","1"]', 'dyabebanlain' => '["5925"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 5, 'nm_ruang' => 'D1.05', 'luas_ruang' => '66.64', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '6', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung","Daikin"]', 'jml_ac' => '["1","1","1"]', 'daya_ac' => '["746","746","755"]', 'jnsbebanlain' => '["Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 6, 'nm_ruang' => 'D1.06', 'luas_ruang' => '78.88', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","755"]', 'jnsbebanlain' => '["Kipas Angin","Dispenser"]', 'jmlbebanlain' => '["2","1"]', 'dyabebanlain' => '["50", "450"]', 'nm_mesin' =>'["Mikrowave MAE","Timbangan","Oven LD0-080N","Bio Ekstraktor","Reaktor Ideal","Reaktor Tak Ideal"]', 'jml_mesin' => '["1","4","1","1","1","1"]', 'daya_mesin' => '["900","120","1500","320","120","120"]'),

            array('ruang_id' => 7, 'nm_ruang' => 'D1.07', 'luas_ruang' => '42.12', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '[""]', 'jml_ac' => '[""]', 'daya_ac' => '[""]', 'jnsbebanlain' => '["Kipas Angin"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["60"]', 'nm_mesin' =>'["Dryer","Mesin Destilasi","Mesin Pengaduk","Mesin Kristalizer","Mesin Screening","Mesin Crusher"]', 'jml_mesin' => '["1","1","1","1","1","1"]', 'daya_mesin' => '["120","520","230","200","200","560"]'),
            

            array('ruang_id' => 8, 'nm_ruang' => 'D2.01', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung"]', 'jml_ac' => '["1"]', 'daya_ac' => '["746"]', 'jnsbebanlain' => '["Printer HP Laserjet 1020","Scanner Canon Lide90","Komputer Standar","Komputer AIO HP 520","Dispenser","Kulkas Showcase","Printer Canon IP2770"]', 'jmlbebanlain' => '["1","1","1","1","1","1","1"]', 'dyabebanlain' => '["25","25","250","320","450","185","11"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 9, 'nm_ruang' => 'D2.02', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin"]', 'jml_ac' => '["1"]', 'daya_ac' => '["755"]', 'jnsbebanlain' => '["TV Sony 21","Laptop 11","Komputer Standar"]', 'jmlbebanlain' => '["1","3","1"]', 'dyabebanlain' => '["108","210","250"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 10, 'nm_ruang' => 'D2.03', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung"]', 'jml_ac' => '["1"]', 'daya_ac' => '["777"]', 'jnsbebanlain' => '["Dispenser","TV 14","Komputer Acer","Komputer Standar","Printer Fuji Xerox"]', 'jmlbebanlain' => '["1","1","1","1","1"]', 'dyabebanlain' => '["450","110","250","250","25"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 11, 'nm_ruang' => 'D2.04', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung"]', 'jml_ac' => '["1"]', 'daya_ac' => '["777"]', 'jnsbebanlain' => '["Komputer Dell Inspiron"]', 'jmlbebanlain' => '["20"]', 'dyabebanlain' => '["6400"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 12, 'nm_ruang' => 'D2.05', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["777","755"]', 'jnsbebanlain' => '["LCD Projector BenQ","Dispenser"]', 'jmlbebanlain' => '["1","1"]', 'dyabebanlain' => '["270","450"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 13, 'nm_ruang' => 'D2.06', 'luas_ruang' => '66.64', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung","Samsung"]', 'jml_ac' => '["1","1","1"]', 'daya_ac' => '["746","746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 14, 'nm_ruang' => 'D2.07', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["777","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 15, 'nm_ruang' => 'D2.08', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["777","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

            array('ruang_id' => 16, 'nm_ruang' => 'D2.09', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

           array('ruang_id' => 17, 'nm_ruang' => 'D3.01', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin 1 1/2PK","Daikin","Samsung"]', 'jml_ac' => '["1","1","1"]', 'daya_ac' => '["1063","755","746"]', 'jnsbebanlain' => '["Server Komputer","TV 21 TCL","Komputer Rakitan","Dispenser","Printer Epson L220","Laptop Acer"]', 'jmlbebanlain' => '["1","4","1","1","2"]', 'dyabebanlain' => '["550","210","1280","450","15","140"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

           array('ruang_id' => 18, 'nm_ruang' => 'D3.02', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Changhong"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","765"]', 'jnsbebanlain' => '["Komputer Standar","Komputer Lama","Scanner","LCD Projector BenQ"]', 'jmlbebanlain' => '["13","1","1","1"]', 'dyabebanlain' => '["3250","430","15","270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

           array('ruang_id' => 19, 'nm_ruang' => 'D3.03', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["0","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),
           
           array('ruang_id' => 20, 'nm_ruang' => 'D3.04', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["755","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),
           
           array('ruang_id' => 21, 'nm_ruang' => 'D3.05', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin","Daikin"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["755","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

           array('ruang_id' => 22, 'nm_ruang' => 'D3.06', 'luas_ruang' => '66.64', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Daikin","Daikin","Daikin"]', 'jml_ac' => '["1","1","1"]', 'daya_ac' => '["755","755","755"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),
           
           array('ruang_id' => 23, 'nm_ruang' => 'D3.07', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),
           
           array('ruang_id' => 24, 'nm_ruang' => 'D3.08', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),
           
           array('ruang_id' => 25, 'nm_ruang' => 'D3.09', 'luas_ruang' => '39.44', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '4', 'daya_lamp' => '25', 'nmbebanac' => '["Samsung","Samsung"]', 'jml_ac' => '["1","1"]', 'daya_ac' => '["746","746"]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),
           
           array('ruang_id' => 26, 'nm_ruang' => 'Selasar Lt 1', 'luas_ruang' => '80.54', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '9', 'daya_lamp' => '25', 'nmbebanac' => '[""]', 'jml_ac' => '[""]', 'daya_ac' => '[""]', 'jnsbebanlain' => '[""]', 'jmlbebanlain' => '[""]', 'dyabebanlain' => '["270"]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

           array('ruang_id' => 27, 'nm_ruang' => 'Selasar Lt 2', 'luas_ruang' => '80.54', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '9', 'daya_lamp' => '25', 'nmbebanac' => '[""]', 'jml_ac' => '[""]', 'daya_ac' => '[""]', 'jnsbebanlain' => '[""]', 'jmlbebanlain' => '[""]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),
           
           array('ruang_id' => 28, 'nm_ruang' => 'Selasar Lt 3', 'luas_ruang' => '80.54', 'jns_lamp' => 'Lampu Hemat Energi', 'jml_lamp' => '9', 'daya_lamp' => '25', 'nmbebanac' => '[""]', 'jml_ac' => '[""]', 'daya_ac' => '[""]', 'jnsbebanlain' => '["LCD Projector BenQ"]', 'jmlbebanlain' => '["1"]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),
           
           array('ruang_id' => 29, 'nm_ruang' => 'Halaman', 'luas_ruang' => '1500', 'jns_lamp' => 'Lampu Halogen', 'jml_lamp' => '2', 'daya_lamp' => '1000', 'nmbebanac' => '[""]', 'jml_ac' => '[""]', 'daya_ac' => '[""]', 'jnsbebanlain' => '[""]', 'jmlbebanlain' => '[""]', 'dyabebanlain' => '[""]', 'nm_mesin' =>'[""]', 'jml_mesin' => '[""]', 'daya_mesin' => '[""]'),

        );

        //masukkan data array ke database
        DB::table('ruangs')->insert($post);


    }
}
