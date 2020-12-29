@extends('layouts.app')

@section('content')
        <div class="row">
          @include('admin.sidebar')
          <div class="col-xl-12">
					<div class="d-flex align-items-end flex-wrap my-auto mg-b-20">
            <a class="btn btn-primary mt-2 mt-xl-0 mg-b-20 mg-r-10"  href="{{ url('/admin/pair') }}">Pares/ Coins</a>
            <a class="btn btn-primary mt-2 mt-xl-0 mg-b-20 mg-r-10" href="{{ url('/admin/signals_generate') }}">Enviar Sinais</a>
            <a class="btn btn-primary mt-2 mt-xl-0 mg-b-20 mg-r-10" href="{{ url('/admin/signal_IA') }}">Gerar Sinais IA</a>
						<a href="{{ url('/admin/signal/create') }}" class="btn btn-primary mt-2 mt-xl-0 mg-b-20"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Sinal</a>
					</div>
					</div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gestão de Sinais</div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example-1" class="table ">
                          <thead>
                            <tr>
                              <th class="border-bottom-0">ID</th>
                              <th class="border-bottom-0">Data de Envio</th>
                              <th class="border-bottom-0">Par</th>
                              <th class="border-bottom-0">Preço Inicial</th>
                              <th class="border-bottom-0">Alvos</th>
                              <th class="border-bottom-0">Stop Loss</th>
                              <th class="border-bottom-0">Stop Up</th>
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
																	 <td>{{ $item->target_1 }} / {{ $item->target_1_p }}%<br>
																			{{ $item->target_2 }} / {{ $item->target_2_p }}%<br>
																			{{ $item->target_3 }} / {{ $item->target_3_p }}%
																	</td>
                                    <td >{{ $item->stop }}/ {{ $item->stop_p }}%</td>                              
                                    <td >{{ $item->stop_up }}%</td>                                                           
                                    <td >{{ $item->getStatusName() }}</td>
                                    <td >{{ $item->getCreatedBy()->name }}</td>
																		<td>
																				<a href="{{ url('/profile/' . $item->id) }}" title="View user"><button class="btn btn-info btn-sm"><i data-placement="top" data-toggle="tooltip-primary" title="" class="ti-sharethis" data-original-title="Enviar Telegram"></i></button></a>
                                        <!--<a href="{{ url('/admin/signal/' . $item->id) }}" title="View user"><button class="btn btn-info btn-sm"><i data-placement="top" data-toggle="tooltip-primary" data-original-title="Visualizar" class="ti-eye"></i></button></a>-->
                                        <a href="{{ url('/admin/signal/' . $item->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i data-placement="top" data-toggle="tooltip-primary" data-original-title="Editar" class="ti-pencil"></i></button></a>
																		    <a href="{{ url('/admin/signals_generate/' . $item->id . '/') }}" title="Generate Signal"><button class="btn btn-primary btn-sm"><i data-placement="top" data-toggle="tooltip-primary" data-original-title="Enviar Sinais" class="ti-bar-chart-alt"></i></button></a>
                                    <form method="POST" action="{{ url('/admin/signal' . '/' . $item->id) }}" accept-charset="UTF-8" style="display: inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="ti-trash" aria-hidden="true"></i></button>
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