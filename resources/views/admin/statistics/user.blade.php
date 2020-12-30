@extends('layouts.app')

@section('content')
        <div class="row">
          @include('admin.sidebar')
          <div class="col-xl-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gestão de Usuários</div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example2" class="table text-md-nowrap">
                          <thead>
                            <tr>
                              <th class="border-bottom-0">ID</th>
                              <th class="border-bottom-0">Nome</th>
                              <th class="border-bottom-0">E-mail</th>
                              <th class="border-bottom-0">Assinatura</th>
                              <th class="border-bottom-0">Operações</th>
                              <th class="border-bottom-0">Último login</th>
                              <th class="border-bottom-0">Nível</th>
                              <th class="border-bottom-0">Ações</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>01/01/2021</td>
                                    <td>21</td>
                                    <td>{{ $item->email_verifyed_at }}</td>
                                    <td>{{$item->profile()}}</td>
                                    <td>
                                        <a href="{{ url('/admin/statistics/' . $item->id.'/edit') }}" title="View user"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                        

                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
