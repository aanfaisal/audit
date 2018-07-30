<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ruang;
use DB;


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


}
