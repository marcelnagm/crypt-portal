@extends('layouts.app')

@section('content')
        @include('admin.sidebar')
        <div class="row">
          <div class="col-xl-12">
					<div class="d-flex align-items-end flex-wrap my-auto mg-b-20">
						<a href="{{ url('/profile/create') }}" class="btn btn-primary mt-2 mt-xl-0 mg-b-20"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
					</div>
					</div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gestão de Níveis</div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example2" class="table text-md-nowrap">
                          <thead>
                            <tr>
                              <th class="border-bottom-0">ID</th>
                              <th class="border-bottom-0">Descrição</th>
                              <th class="border-bottom-0">Ações</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($profile as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="{{ url('/profile/' . $item->id) }}" title="View user"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                        <a href="{{ url('/profile/' . $item->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                        <form method="POST" action="{{ url('/profile' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remover</button>
                                        </form>
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