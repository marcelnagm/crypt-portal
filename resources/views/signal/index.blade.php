@extends('layouts.app')

@section('content')
        <div class="row">
          @include('admin.sidebar')
          <div class="col-xl-12">
					<div class="d-flex align-items-end flex-wrap my-auto mg-b-20">
            <a class="btn btn-primary mt-2 mt-xl-0 mg-b-20 mg-r-10"  href="{{ url('/admin/pair') }}">Pares/ Coins</a>
            <a class="btn btn-primary mt-2 mt-xl-0 mg-b-20 mg-r-10" href="{{ url('/admin/signals_generate') }}">Gerar Sinais IA</a>
						<a href="{{ url('/admin/signal/create') }}" class="btn btn-primary mt-2 mt-xl-0 mg-b-20"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Sinal</a>
					</div>
					</div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gestão de Sinais</div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example2" class="table ">
                          <thead>
                            <tr>
                              <th class="border-bottom-0">ID</th>
                              <th class="border-bottom-0">Data de Envio</th>
                              <th class="border-bottom-0">Par</th>
                              <th class="border-bottom-0">Preço Inicial</th>
                              <th class="border-bottom-0">Alvo 1</th>
                              <th class="border-bottom-0">Alvo 2</th>
                              <th class="border-bottom-0">Alvo 3</th>
                              <th class="border-bottom-0">Stop Loss</th>
                              <th class="border-bottom-0">Trailing Stop</th>
                              <th class="border-bottom-0">Status</th>
                              <th class="border-bottom-0">Criado por</th>
                              <th class="border-bottom-0">Ações</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($signal as $item)
                                <tr>
                                    <td >{{ $item->id }}</td>
                                    <td >{{ $item->sended_at }}</td>
                                    <td>{{ $item->getPair() }}</td>
                                    <td>{{ $item->entry_value }}</td>
                                    <td>{{ $item->target_1 }}</td>
                                    <td>{{ $item->target_2 }}</td>
                                    <td>{{ $item->target_3 }}</td>
                                    <td >{{ $item->stop }}</td>
                                    <td >{{ $item->stop_up }}</td>                                
                                    <td >{{ $item->getStatusName() }}</td>
                                    <td >{{ $item->getCreatedBy()->name }}</td>
                                    <td >
                                     <a href="#"><i data-placement="top" data-toggle="tooltip-primary" title="" class="ti-sharethis" data-original-title="Enviar Telegram"></i> </a> 
                                     <a href="{{ url('/admin/signal/' . $item->id) }}" title="View Profile"><i data-placement="top" data-toggle="tooltip-primary" data-original-title="Visualizar" class="ti-eye"></i></a>
                                     <a href="{{ url('/admin/signal/' . $item->id . '/edit') }}" title="Edit Profile"><i data-placement="top" data-toggle="tooltip-primary" data-original-title="Editar" class="ti-pencil"></i></a>
                                     <a href="{{ url('/admin/signals_generate/' . $item->id . '/') }}" title="Generate Signal"><i data-placement="top" data-toggle="tooltip-primary" data-original-title="Editar" class="ti-pencil"></i></a>
                                    <form method="POST" action="{{ url('/admin/signal' . '/' . $item->id) }}" accept-charset="UTF-8">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remover</button>
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