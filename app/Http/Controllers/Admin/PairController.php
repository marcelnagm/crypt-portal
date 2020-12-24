<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Pair;
use Illuminate\Http\Request;

class PairController extends Controller
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
            $pair = Pair::where('pair', 'LIKE', "%$keyword%")
                ->orWhere('main_coin', 'LIKE', "%$keyword%")
                ->orWhere('sec_coin', 'LIKE', "%$keyword%")
                ->orWhere('min_quantity', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pair = Pair::latest()->paginate($perPage);
        }

        return view('admin.pair.index', compact('pair'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pair.create');
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
        
        Pair::create($requestData);

        return redirect('/admin/pair')->with('flash_message', 'Pair added!');
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
        $pair = Pair::findOrFail($id);

        return view('admin.pair.show', compact('pair'));
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
        $pair = Pair::findOrFail($id);

        return view('admin.pair.edit', compact('pair'));
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
        
        $pair = Pair::findOrFail($id);
        $pair->update($requestData);

        return redirect('/admin/pair')->with('flash_message', 'Pair updated!');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function retrive(Request $request)
    {
        $request->user()->market();
        return redirect('/admin/pair')->with('flash_message', 'Getted from Binnace!');
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
        Pair::destroy($id);

        return redirect('/admin/pair')->with('flash_message', 'Pair deleted!');
    }
}
