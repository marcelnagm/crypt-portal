@extends('layout_user')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Notification {{ $notification->id }}</div>
                <div class="card-body">

                    <a href="{{ url('/user/notification') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/user/notification/' . $notification->id . '/edit') }}" title="Edit Notification"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Marcar como Lida</button></a>

                    <form method="POST" action="{{ url('/user//notification' . '/' . $notification->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Notification" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>

                                </tr>
                                <tr><th> Type Id </th><td> {{ $notification->type_id }} </td></tr>
                                <tr><th> Message </th><td> {{ $notification->title.'- '.$notification->title }} </td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
