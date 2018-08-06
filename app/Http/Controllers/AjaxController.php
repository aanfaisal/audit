<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
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
        $queries = Ruang::search($term)->get();
        

        // tanpa ES 
        // $queries = Ruang::where('nma_ruang', 'LIKE', '%'.$term.'%')
        //         ->orWhere('id', 'LIKE', '%'.$term.'%')
        //         ->get();   
        

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
                            'jml_ac'        =>$query->jml_ac,
                            'jnsbebanlain'  =>$query->jnsbebanlain,
                            'jmlbebanlain'  =>$query->jmlbebanlain,
                            'dyabebanlain'  =>$query->dyabebanlain,
                            'nm_mesin'      =>$query->nm_mesin,
                            'jml_mesin'     =>$query->jml_mesin,
                            'daya_mesin'    =>$query->daya_mesin,
                           
                         ];
        }

        return Response::json($results);
    }

}
