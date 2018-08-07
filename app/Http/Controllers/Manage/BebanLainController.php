<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Session;
use App\Ruang;
use App\BebanLain;
use Illuminate\Http\Request;

class BebanLainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $bebanlain = BebanLain::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('jns_beban', 'LIKE', "%$keyword%")
                ->orWhere('jml_beban', 'LIKE', "%$keyword%")
                ->orWhere('daya_beban', 'LIKE', "%$keyword%")
                ->orWhere('tot_pemakaian', 'LIKE', "%$keyword%")
                ->orWhere('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayalain', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bebanlain = BebanLain::orderBy('wktu_pengukuran', 'desc')->paginate($perPage);
        }

        return view('admin.beban-lain.index', compact('bebanlain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $nm_ruang = DB::table('ruangs')->pluck('nm_ruang', 'ruang_id');
        return view('admin.beban-lain.create1')->with('nm_ruang', $nm_ruang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        //BebanLain::create($requestData);

        //dd($requestData);
        $BebanLain = new BebanLain;

        $dayatotal = $request->daya_beban * $request->jml_beban * $request->tot_pemakaian / 1000;
        
        $BebanLain->ruang_id =$request->ruang_id;
        $BebanLain->jns_beban = $request->jns_beban;
        $BebanLain->jml_beban =$request->jml_beban;
        $BebanLain->daya_beban =$request->daya_beban;
        $BebanLain->tot_pemakaian = $request->tot_pemakaian;
        $BebanLain->wktu_pengukuran = $request->wktu_pengukuran;
        $BebanLain->tot_dayalain = $dayatotal;
        
        $BebanLain->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan Data Beban Lain" 
        ]);

        return redirect('manage/beban-lain');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $bebanlain = BebanLain::findOrFail($id);

        return view('admin.beban-lain.show', compact('bebanlain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $bebanlain = BebanLain::findOrFail($id);

        return view('admin.beban-lain.edit', compact('bebanlain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $bebanlain = BebanLain::findOrFail($id);

        // $BebanLain = new BebanLain;

        // $dayatotal = $request->daya_beban * $request->jml_beban * $request->tot_pemakaian / 1000;
        
        // $BebanLain->ruang_id =$request->ruang_id;
        // $BebanLain->jns_beban = $request->jns_beban;
        // $BebanLain->jml_beban =$request->jml_beban;
        // $BebanLain->daya_beban =$request->daya_beban;
        // $BebanLain->tot_pemakaian = $request->tot_pemakaian;
        // $BebanLain->wktu_pengukuran = $request->wktu_pengukuran;
        // $BebanLain->tot_dayalain = $dayatotal;
        
        // $BebanLain->save();
        
        $bebanlain->update($requestData);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengupdate Data Beban Lain" 
        ]);

        return redirect('manage/beban-lain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        BebanLain::destroy($id);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menghapus Data Beban Lain",
        ]);

        return redirect('manage/beban-lain');
    }
}
