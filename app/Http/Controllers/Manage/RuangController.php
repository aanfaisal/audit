<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
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
            $ruang = Ruang::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('luas_ruang', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayapenerangan', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayaac', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayalain', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayamesin', 'LIKE', "%$keyword%")
                ->orWhere('nilai_IKE', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ruang = Ruang::latest()->paginate($perPage);
        }

        return view('admin.ruang.index', compact('ruang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.ruang.create');
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
        
        Ruang::create($requestData);

        return redirect('manage/ruang')->with('flash_message', 'Ruang added!');
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
        $ruang = Ruang::findOrFail($id);

        return view('admin.ruang.show', compact('ruang'));
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
        $ruang = Ruang::findOrFail($id);

        return view('admin.ruang.edit', compact('ruang'));
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
        
        $ruang = Ruang::findOrFail($id);
        $ruang->update($requestData);

        return redirect('manage/ruang')->with('flash_message', 'Ruang updated!');
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
        Ruang::destroy($id);

        return redirect('manage/ruang')->with('flash_message', 'Ruang deleted!');
    }
}