<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
            $bebanlain = BebanLain::latest()->paginate($perPage);
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
        return view('admin.beban-lain.create');
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
        
        BebanLain::create($requestData);

        return redirect('manage/beban-lain')->with('flash_message', 'BebanLain added!');
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
        $bebanlain->update($requestData);

        return redirect('manage/beban-lain')->with('flash_message', 'BebanLain updated!');
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

        return redirect('manage/beban-lain')->with('flash_message', 'BebanLain deleted!');
    }
}
