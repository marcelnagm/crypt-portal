@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">user {{ $user->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/user/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/user/user/' . $user->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('user/user' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $user->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $user->name }} </td></tr><tr><th> Email </th><td> {{ $user->email }} </td></tr><tr><th> Email Verifyed At </th><td> {{ $user->email_verifyed_at }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                        <b>Histórico de Assinaturas</b>
                        <div class="table-responsive">
                            <table class="table">                                
                                <thead>
                                    <tr>
                                        <td>
                                            Id
                                        </td>
                                        <td>
                                            Tipo
                                        </td>
                                        <td>
                                            Inicio Vigência
                                        </td>
                                        <td>
                                            Fim Vigência
                                        </td>
                                        <td>
                                            Ativo
                                        </td>
                                    </tr>  
                                </thead>
                                <tbody>
                                    <?php foreach ( $user->signatures() as $sign){ ?>                                    
                                    <tr>
                                        <td>{{ $sign->id }}</td>
                                        <td>{{ $sign->signature_type() }}</td>
                                        <td>{{ $sign->start_at }}</td>
                                        <td>{{ $sign->finish_at }}</td>                                        
                                        <td>{{ $sign->isValid() }}</td>                                        
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
