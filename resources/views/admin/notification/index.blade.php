@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Notification</div>
                    <div class="card-body">

                        <form method="GET" action="{{ url('//user//notification') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/><a href="{{ url('/admin/notification/create') }}" title="Criar Notification"><button class="btn btn-primary btn-sm"><i class="fa" aria-hidden="true"></i> Criar Notificartion</button></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Type Id</th>
                                        <th>Mensagem</th>
                                        <th>Para quem?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($notification as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->type_id }}</td>
                                        <td>{{ $item->title.' - '.$item->message }}</td>
                                        <td>{{ $item->getUserId() }}</td>                                     
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $notification->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
