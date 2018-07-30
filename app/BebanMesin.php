<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebanMesin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'beban_mesins';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'bebanmesin_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ruang_id', 'nm_mesin', 'daya_mesin', 'tot_pemakaian', 'wktu_pengukuran', 'tot_dayamesin'];

    public function ruang()
    {
            return $this->belongsTo('App\Ruang', 'ruang_id');
    }
}
