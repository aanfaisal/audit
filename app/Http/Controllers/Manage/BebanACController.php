<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BebanAC;
use Illuminate\Http\Request;

class BebanACController extends Controller
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
            $bebanac = BebanAC::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('jml_ac', 'LIKE', "%$keyword%")
                ->orWhere('daya_ac', 'LIKE', "%$keyword%")
                ->orWhere('tot_pemakaian', 'LIKE', "%$keyword%")
                ->orWhere('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayaac', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bebanac = BebanAC::latest()->paginate($perPage);
        }

        return view('beban-a-c.index', compact('bebanac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('beban-a-c.create');
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
        
        BebanAC::create($requestData);

        return redirect('manage/beban-a-c')->with('flash_message', 'BebanAC added!');
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
        $bebanac = BebanAC::findOrFail($id);

        return view('beban-a-c.show', compact('bebanac'));
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
        $bebanac = BebanAC::findOrFail($id);

        return view('beban-a-c.edit', compact('bebanac'));
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
        
        $bebanac = BebanAC::findOrFail($id);
        $bebanac->update($requestData);

        return redirect('manage/beban-a-c')->with('flash_message', 'BebanAC updated!');
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
        BebanAC::destroy($id);

        return redirect('manage/beban-a-c')->with('flash_message', 'BebanAC deleted!');
    }
}
