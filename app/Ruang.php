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
     * Menyimpan ke database dalam bentuk array
     * 
     * @var array
     */
    protected $casts = [
        'nmbebanac' => 'array',
        'jml_ac' => 'array',
        'daya_ac' => 'array',
        'jnsbebanlain' => 'array',
        'jmlbebanlain' => 'array',
        'dyabebanlain' => 'array',
        'nm_mesin' => 'array',
        'jml_mesin' => 'array',
        'daya_mesin' => 'array',
    ];
   

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


    public function ac()
    {
            return $this->hasMany('App\BebanAc');
    }
    public function lain()
    {
            return $this->hasMany('App\BebanLain');
    }
    public function mesin()
    {
            return $this->hasMany('App\BebanMesin');
    }

    public function penerangan()
    {
            return $this->hasMany('App\BebanPenerangan');
    }
    
    
}
