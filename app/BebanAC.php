<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebanAc extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'beban_acs';

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
    protected $fillable = ['ruang_id', 'jml_ac', 'daya_ac', 'tot_pemakaian', 'wktu_pengukuran', 'tot_dayaac'];

    public function ruang()
    {
            return $this->belongsTo('App\Ruang', 'ruang_id');
    }
    
}
