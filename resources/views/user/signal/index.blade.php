@extends('layout_user')

@section('content')
<script type="text/javascript">    
    window.setInterval(function(){
        Location.reload(true);
    }, 60*1000); //NOTE: period is passed in milliseconds
</script>
<div class="row">
    @include('admin.sidebar')
    <div class="col-xl-12">
        <div class="d-flex align-items-end flex-wrap my-auto mg-b-20">
            <a href="{{ url('/user/op/create') }}" class="btn btn-primary mt-2 mt-xl-0 mg-b-20"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Sinal</a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Gestão de Sinais</div>
            <div class="card-body">
                <div class="table-responsive">
                    <h2>Targets Multiplo</h2>
                    <table id="example-1" class="table ">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">Par</th>
                                <th class="border-bottom-0">Preço Inicial</th>
                                <th class="border-bottom-0">Alvo</th>
                                <th class="border-bottom-0">Stop Loss</th>
                                <th class="border-bottom-0">Stop Up$</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">P/L</th>
                                <th class="border-bottom-0">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($signal as $item)
                            <tr>
                                <td>{{ $item->getPair() }}</td>
                                <td>{{ $item->entry_value }}</td> 
                                <?php $conf = Auth::user()->configuration(); ?>
                                @if($conf->target_profile ==1)
                                <td>{{ $item->target_1 }} / {{ $item->target_1_p }}%</td>
                                @endif
                                <?php $conf = Auth::user()->configuration(); ?>
                                @if($conf->target_profile ==2)
                                <td>{{ $item->target_1 }} / {{ $item->target_1_p }}%<br>
                                    @if(isset($item->target_2))
                                    {{ $item->target_2 }} / {{ $item->target_2_p }}%<br>
                                    @endif
                                    @if(isset($item->target_3))
                                    {{ $item->target_3 }} / {{ $item->target_3_p }}%
                                    @endif
                                </td>
                                @endif
                                <?php $conf = Auth::user()->configuration(); ?>
                                @if($conf->target_profile ==3)
                                <td>{{ $item->target_1 }} / {{ $item->target_1_p }}%<br>
                                    @if(isset($item->target_2))
                                    {{ $item->target_2 }} / {{ $item->target_2_p }}%<br>
                                    @endif
                                    @if(isset($item->target_3))
                                    {{ $item->target_3 }} / {{ $item->target_3_p }}%
                                    @endif
                                </td>
                                @endif
                                <td >{{ $item->stop }}/ {{ $item->stop_p }}%</td>                              
                                <td >{{ $item->stop_up }}%</td>                              
                                <td >{{ $item->getStatusName() }}</td>
                                <td >
                                    @if($item->payed != null)
                                    <?php echo $item->getProfit() ?>
                                    @else
                                    Não comprado ainda
                                    @endif
                                </td>
                                <td>

                                    <a href="{{ url('/user/op/' . $item->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i data-placement="top" data-toggle="tooltip-primary" data-original-title="Editar" class="ti-pencil"></i></button></a>
                                    <form method="POST" action="{{ url('/user/op' . '/' . $item->id) }}" accept-charset="UTF-8" style="display: inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="ti-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                   
                </div>
                <!--<div class="table-responsive">
                    <h2>Targets Moveis</h2>
                    <table id="example-1" class="table ">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">Par</th>
                                <th class="border-bottom-0">Preço Inicial</th>
                                <th class="border-bottom-0">Alvo 1</th>
                                <th class="border-bottom-0">Alvo 2</th>
                                <th class="border-bottom-0">Alvo 3</th>
                                <th class="border-bottom-0">Stop Loss</th>
                                <th class="border-bottom-0">Stop Up$</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Ações</th>
                            </tr>
                        </thead>
                        @foreach($single as $item)
                        <tr>
                            <td>{{ $item->getPair()->pair }}</td>
                            <td>{{ $item->entry_value }}</td>
                            <td>{{ $item->target }} / {{ $item->target_p }}%</td>
                            <td>{{ $item->target_2 }} / {{ $item->target_2_p }}%</td>
                            <td>{{ $item->target_3 }} / {{ $item->target_3_p }}%</td>
                            <td >{{ $item->stop }}/ {{ $item->stop_p }}%</td>                              
                            <td >{{ $item->stop_up*100 }}%</td>                              
                            <td >{{ $item->getStatusName() }}</td>
                            <td>

                                <a href="{{ url('/user/op/' . $item->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i data-placement="top" data-toggle="tooltip-primary" data-original-title="Editar" class="ti-pencil"></i></button></a>
                                <form method="POST" action="{{ url('/user/op' . '/' . $item->id) }}" accept-charset="UTF-8" style="display: inline;">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="ti-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>-->
            </div>
        </div>
    </div>
</div>
@endsection