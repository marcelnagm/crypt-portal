@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">UserSignature {{ $usersignature->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/user-signature') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/user-signature/' . $usersignature->id . '/edit') }}" title="Edit UserSignature"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('/adminusersignature' . '/' . $usersignature->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete UserSignature" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $usersignature->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $usersignature->user_id }} </td></tr><tr><th> Signature Type Id </th><td> {{ $usersignature->signature_type_id }} </td></tr><tr><th> Start At </th><td> {{ $usersignature->start_at }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
