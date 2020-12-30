<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\SignatureType;
use Illuminate\Http\Request;

class SignatureTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $signaturetype = SignatureType::where('name', 'LIKE', "%$keyword%")
                ->orWhere('cost', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $signaturetype = SignatureType::latest()->paginate($perPage);
        }

        return view('admin.signature-type.index', compact('signaturetype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        return view('admin.signature-type.create');
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
       if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!'); 
        $requestData = $request->all();
        
        SignatureType::create($requestData);

        return redirect('/admin/signature-type')->with('flash_message', 'SignatureType added!');
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
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $signaturetype = SignatureType::findOrFail($id);

        return view('admin.signature-type.show', compact('signaturetype'));
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
        $signaturetype = SignatureType::findOrFail($id);

        return view('admin.signature-type.edit', compact('signaturetype'));
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
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $requestData = $request->all();
        
        $signaturetype = SignatureType::findOrFail($id);
        $signaturetype->update($requestData);

        return redirect('/admin/signature-type')->with('flash_message', 'SignatureType updated!');
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
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        SignatureType::destroy($id);

        return redirect('/admin/signature-type')->with('flash_message', 'SignatureType deleted!');
    }
}
