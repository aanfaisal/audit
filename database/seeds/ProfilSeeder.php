<?php

use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ngosongin tabel
        DB::table('profils')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array(
            array('profil_id' => 1, 'p_gedung' => 'Gedung D', 'nama_institusi' => 'Universitas Wahid Hasyim Semarang', 'alamat' => 'Jl. Menoreh Tengah X No.22, Sampangan, Gajahmungkur, Kota Semarang, Jawa Tengah 50232', 'jml_gedung' => '5', 'jml_lantai' => '3', 'jml_meter' => '1', 'meter_id' => '55324134124455', 'tot_daya' => '66 KVA', 'pnjng_gedung' => '50', 'lbr_gedung' => '8', 'tinggi_gedung' => '18', 'luas_gedung' =>'1200'),
             );

        //masukkan data array ke database
        DB::table('profils')->insert($post);

    }
}
