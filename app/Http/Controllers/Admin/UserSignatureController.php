<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\SignatureType;


use App\Models\UserSignature;
use Illuminate\Http\Request;

class UserSignatureController extends Controller
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
            $usersignature = UserSignature::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('signature_type_id', 'LIKE', "%$keyword%")
                ->orWhere('start_at', 'LIKE', "%$keyword%")
                ->orWhere('finish_at', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $usersignature = UserSignature::latest()->paginate($perPage);
        }

        return view('admin.user-signature.index', compact('usersignature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $user = $request->get('user');
        
         $items = \App\Models\SignatureType::all();
        return view('admin.user-signature.create', compact('items','user'));
        
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
        
        UserSignature::create($requestData);

        return redirect('/admin/user/'.$requestData['user_id'])->with('flash_message', 'UserSignature added!');
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
        $usersignature = UserSignature::findOrFail($id);

        return view('admin.user-signature.show', compact('usersignature'));
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
        $usersignature = UserSignature::findOrFail($id);
          $items = \App\Models\SignatureType::all();
        return view('admin.user-signature.edit', compact('usersignature','items'));
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
        
        $usersignature = UserSignature::findOrFail($id);
        $usersignature->update($requestData);

        return redirect('/admin/user/'.$requestData['user_id'])->with('flash_message', 'UserSignature updated!');
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
        
        $user_id = UserSignature::find($id)->user_id;
        UserSignature::destroy($id);
        
        return redirect('/admin/user/'.$user_id)->with('flash_message', 'Deleted updated!');
        
    }
}
