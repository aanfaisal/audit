<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BebanMesin;
use Illuminate\Http\Request;

class BebanMesinController extends Controller
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
            $bebanmesin = BebanMesin::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('nm_mesin', 'LIKE', "%$keyword%")
                ->orWhere('daya_mesin', 'LIKE', "%$keyword%")
                ->orWhere('tot_pemakaian', 'LIKE', "%$keyword%")
                ->orWhere('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayamesin', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bebanmesin = BebanMesin::latest()->paginate($perPage);
        }

        return view('admin.beban-mesin.index', compact('bebanmesin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.beban-mesin.create');
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
        
        BebanMesin::create($requestData);

        return redirect('manage/beban-mesin')->with('flash_message', 'BebanMesin added!');
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
        $bebanmesin = BebanMesin::findOrFail($id);

        return view('admin.beban-mesin.show', compact('bebanmesin'));
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
        $bebanmesin = BebanMesin::findOrFail($id);

        return view('admin.beban-mesin.edit', compact('bebanmesin'));
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
        
        $bebanmesin = BebanMesin::findOrFail($id);
        $bebanmesin->update($requestData);

        return redirect('manage/beban-mesin')->with('flash_message', 'BebanMesin updated!');
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
        BebanMesin::destroy($id);

        return redirect('manage/beban-mesin')->with('flash_message', 'BebanMesin deleted!');
    }
}
