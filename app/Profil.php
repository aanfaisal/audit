<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profils';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'profil_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['p_gedung', 'nama_institusi', 'alamat', 'jml_gedung', 'jml_lantai', 'jml_meter', 'meter_id', 'tot_daya', 'pnjng_gedung', 'lbr_gedung', 'tinggi_gedung', 'luas_gedung'];

    
}
