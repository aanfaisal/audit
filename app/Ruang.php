<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ruangs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'ruang_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nm_ruang', 'luas_ruang', 'jns_lamp', 'jml_lamp', 'daya_lamp', 'nmbebanac', 'jml_ac', 'daya_ac', 'jnsbebanlain', 'jmlbebanlain', 'dyabebanlain', 'nm_mesin', 'jml_mesin', 'daya_mesin', 'nilai_IKE'];

    
}
