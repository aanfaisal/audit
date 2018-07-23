<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BebanAc;
use Illuminate\Http\Request;

class BebanAcController extends Controller
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
            $bebanac = BebanAc::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('jml_ac', 'LIKE', "%$keyword%")
                ->orWhere('daya_ac', 'LIKE', "%$keyword%")
                ->orWhere('tot_pemakaian', 'LIKE', "%$keyword%")
                ->orWhere('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayaac', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bebanac = BebanAc::latest()->paginate($perPage);
        }

        return view('admin.beban-ac.index', compact('bebanac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.beban-ac.create1');
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
        
        BebanAc::create($requestData);

        return redirect('manage/beban-ac')->with('flash_message', 'BebanAc added!');
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
        $bebanac = BebanAc::findOrFail($id);

        return view('admin.beban-ac.show', compact('bebanac'));
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
        $bebanac = BebanAc::findOrFail($id);

        return view('admin.beban-ac.edit', compact('bebanac'));
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
        
        $bebanac = BebanAc::findOrFail($id);
        $bebanac->update($requestData);

        return redirect('manage/beban-ac')->with('flash_message', 'BebanAc updated!');
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
        BebanAc::destroy($id);

        return redirect('manage/beban-ac')->with('flash_message', 'BebanAc deleted!');
    }
}
