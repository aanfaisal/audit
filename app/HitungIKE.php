<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HitungIKE extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hitung_i_k_es';

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

    
}
