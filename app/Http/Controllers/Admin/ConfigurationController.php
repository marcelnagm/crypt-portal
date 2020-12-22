<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
       $user = Auth::user();
            $configuration = Configuration::where('user_id', '=', auth()->user()->id)->get()[0];
                
//        $configuration = Configuration::findOrFail($id);

        return view('configuration.edit', compact('configuration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('configuration.create');
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
        
        Configuration::create($requestData);

        return redirect('/admin/configuration')->with('flash_message', 'Configuration added!');
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
        
            $user = Auth::user();
            $configuration = Configuration::where('user_id', '=', auth()->user()->id)->get()[0];
                
//        $configuration = Configuration::findOrFail($id);

        return view('configuration.edit', compact('configuration'));
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
        unset($requestData['user_id']);
        $configuration = Configuration::findOrFail($id);
        $configuration->update($requestData);

        return redirect('/admin/configuration')->with('flash_message', 'Configuration updated!');
    }
}
