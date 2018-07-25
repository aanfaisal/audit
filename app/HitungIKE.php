<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HitungIke extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hitung_ikes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'ike_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['wktu_pengukuran', 'hsil_perhitungan'];

    public function ruang()
    {
            return $this->belongsTo('App\Ruang', 'ruang_id');
    }
}
