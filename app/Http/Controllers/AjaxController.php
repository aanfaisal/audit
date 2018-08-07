<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use Illuminate\Support\Facades\DB;

use Response;
use App\Ruang;
use App\BebanAc;
use App\BebanLain;
use App\BebanMesin;
use App\BebanPenerangan;


class AjaxController extends Controller
{
    /**
     * 
     *	Get Ruang
     *
     * @var $ruang
     */
    public function ajaxruang(Request $request)
    {
        $ruang = Ruang::findOrFail($request->id);
        return response()->json(['data' => $ruang]);
    }

    // Pengujian auto item +++++++++++++++++++++++++++++++++++++++

    public function auto_item() //mengunakan jqueryUi
    {
        $term = Input::get('term');
    
        $results = array();

        // dengan ES
        

        //tanpa ES 
        $queries = Ruang::where('nm_ruang', 'LIKE', '%'.$term.'%')
                ->orWhere('ruang_id', 'LIKE', '%'.$term.'%')
                ->get();   
        

    foreach ($queries as $query)
        {          
            $results[] = [
                    'ruang_id'      =>$query->ruang_id,  
                    'value'         =>$query->nm_ruang, //harus "value" -> jQueryUi                          
                    'luas_ruang'    =>$query->luas_ruang,
                    'jns_lamp'      =>$query->jns_lamp,
                    'jml_lamp'      =>$query->jml_lamp,
                    'daya_lamp'     =>$query->daya_lamp,
                    'nmbebanac'     =>$query->nmbebanac,
                    //'jml_ac'        =>$query->jml_ac,
                    'jml_ac'        =>collect($query->jml_ac)->sum(),
                    'daya_ac'       =>collect($query->daya_ac)->sum(),
                    //'jnsbebanlain'  =>$query->jnsbebanlain,
                    'jns_beban'     =>collect($query->jnsbebanlain)->shift(),
                    //'jmlbebanlain'  =>$query->jmlbebanlain,
                    'jml_beban'     =>collect($query->jmlbebanlain)->sum(),
                    //'dyabebanlain'  =>$query->dyabebanlain,
                    'daya_beban'    =>collect($query->dyabebanlain)->sum(),
                    'nm_mesin'      =>$query->nm_mesin,
                    //'jml_mesin'     =>$query->jml_mesin,
                    'jml_mesin'     => collect($query->jml_mesin)->sum(),
                    //'daya_mesin'    =>$query->daya_mesin,
                    'daya_mesin'    => collect($query->daya_mesin)->sum(),
                   
                ];
        }

        return Response::json($results);
    }

}
