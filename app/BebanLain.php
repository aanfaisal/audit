<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebanLain extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'beban_lains';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'bebanlain_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ruang_id', 'jns_beban', 'jml_beban', 'daya_beban', 'tot_pemakaian', 'wktu_pengukuran', 'tot_dayalain'];

    public function ruang()
    {
            return $this->belongsTo('App\Ruang', 'ruang_id');
    }
}
