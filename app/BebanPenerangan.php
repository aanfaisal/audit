<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebanPenerangan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'beban_penerangans';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'beban_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nm_ruang', 'jns_lamp', 'jml_lamp', 'daya_lamp', 'tot_pemakaian', 'wktu_pengukuran', 'tot_dayapen'];

    
}
