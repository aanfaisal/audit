<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BebanPenerangan;
use Illuminate\Http\Request;

class BebanPeneranganController extends Controller
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
            $bebanpenerangan = BebanPenerangan::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('jns_lamp', 'LIKE', "%$keyword%")
                ->orWhere('jml_lamp', 'LIKE', "%$keyword%")
                ->orWhere('daya_lamp', 'LIKE', "%$keyword%")
                ->orWhere('tot_pemakaian', 'LIKE', "%$keyword%")
                ->orWhere('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayapen', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bebanpenerangan = BebanPenerangan::orderBy('wktu_pengukuran', 'desc')->paginate($perPage);
        }

        return view('admin.beban-penerangan.index', compact('bebanpenerangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.beban-penerangan.create1');
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
        
        BebanPenerangan::create($requestData);

        return redirect('manage/beban-penerangan')->with('flash_message', 'BebanPenerangan added!');
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
        $bebanpenerangan = BebanPenerangan::findOrFail($id);

        return view('admin.beban-penerangan.show', compact('bebanpenerangan'));
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
        $bebanpenerangan = BebanPenerangan::findOrFail($id);

        return view('admin.beban-penerangan.edit', compact('bebanpenerangan'));
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
        
        $bebanpenerangan = BebanPenerangan::findOrFail($id);
        $bebanpenerangan->update($requestData);

        return redirect('manage/beban-penerangan')->with('flash_message', 'BebanPenerangan updated!');
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
        BebanPenerangan::destroy($id);

        return redirect('manage/beban-penerangan')->with('flash_message', 'BebanPenerangan deleted!');
    }
}
