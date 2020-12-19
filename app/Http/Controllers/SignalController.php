<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Signal;
use App\Models\Pair;
use Illuminate\Http\Request;

class SignalController extends Controller
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
            $signal = Signal::where('pair_id', 'LIKE', "%$keyword%")
                ->orWhere('entry_value', 'LIKE', "%$keyword%")
                ->orWhere('target', 'LIKE', "%$keyword%")
                ->orWhere('stop', 'LIKE', "%$keyword%")
                ->orWhere('stop_up', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $signal = Signal::latest()->paginate($perPage);
        }

        return view('signal.index', compact('signal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
         $items = Pair::all();
        return view('signal.create', compact('items'));
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
        $requestData['created_by'] = 1;
        Signal::create($requestData);

        return redirect('signal')->with('flash_message', 'Signal added!');
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
        $signal = Signal::findOrFail($id);

        return view('signal.show', compact('signal'));
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
        $signal = Signal::findOrFail($id);

        return view('signal.edit', compact('signal'));
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
        
        $signal = Signal::findOrFail($id);
        $signal->update($requestData);

        return redirect('signal')->with('flash_message', 'Signal updated!');
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
        Signal::destroy($id);

        return redirect('signal')->with('flash_message', 'Signal deleted!');
    }
}
