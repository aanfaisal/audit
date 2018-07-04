<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebanAC extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'beban_a_cs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'bebanac_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nm_ruang', 'jml_ac', 'daya_ac', 'tot_pemakaian', 'wktu_pengukuran', 'tot_dayaac'];

    
}
