<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
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
            $profil = Profil::where('p_gedung', 'LIKE', "%$keyword%")
                ->orWhere('nama_institusi', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('jml_gedung', 'LIKE', "%$keyword%")
                ->orWhere('jml_lantai', 'LIKE', "%$keyword%")
                ->orWhere('jml_meter', 'LIKE', "%$keyword%")
                ->orWhere('meter_id', 'LIKE', "%$keyword%")
                ->orWhere('tot_daya', 'LIKE', "%$keyword%")
                ->orWhere('pnjng_gedung', 'LIKE', "%$keyword%")
                ->orWhere('lbr_gedung', 'LIKE', "%$keyword%")
                ->orWhere('tinggi_gedung', 'LIKE', "%$keyword%")
                ->orWhere('luas_gedung', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $profil = Profil::latest()->paginate($perPage);
        }

        return view('admin.profil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.profil.create');
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
        
        Profil::create($requestData);

        return redirect('manage/profil')->with('flash_message', 'Profil added!');
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
        $profil = Profil::findOrFail($id);

        return view('admin.profil.show', compact('profil'));
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
        $profil = Profil::findOrFail($id);

        return view('admin.profil.edit', compact('profil'));
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
        
        $profil = Profil::findOrFail($id);
        $profil->update($requestData);

        return redirect('manage/profil/1/edit')->with('flash_message', 'Profil updated!');
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
        Profil::destroy($id);

        return redirect('manage/profil')->with('flash_message', 'Profil deleted!');
    }
}
