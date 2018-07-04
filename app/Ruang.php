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
    protected $fillable = ['nm_ruang', 'luas_ruang', 'tot_dayapenerangan', 'tot_dayaac', 'tot_dayalain', 'tot_dayamesin', 'nilai_IKE'];

    
}
