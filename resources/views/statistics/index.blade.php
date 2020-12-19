@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-12">
            <div class="card">
                <h3 class="content-title mb-2">Bem vindo,</h3>
                <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Painel&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">&nbsp;Sinais</p>
                </div>
            </div>
            
        <!-- row -->
        <div class="float-right d-flex  align-items-end flex-wrap my-auto right-content breadcrumb-right ">
            <button type="button" class="btn btn-warning btn-icon mr-3 mt-2 mt-xl-0">
                <i class="mdi mdi-download "></i>
            </button>
            <button type="button" class="btn btn-danger  btn-icon mr-3 mt-2 mt-xl-0">
                <i class="mdi mdi-clock"></i>
            </button>
            <button type="button" class="btn btn-success btn-icon mr-3 mt-2 mt-xl-0">
                <i class="mdi mdi-plus"></i>
            </button>
            <button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
        </div>
        </div>
        <!-- /breadcrumb -->

        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13 dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="example2_info" style="width: 676px;">
                    <thead>
                        <tr role="row">
                            <th style="width: 129px;" aria-sort="ascending" aria-label="Data de Envio: activate to sort column descending">Id</th>
                            <th style="width: 129px;" >Data de Envio</th>
                            <th style="width: 91px;" aria-label="Par: activate to sort column ascending">Par</th>
                            <th style="width: 101px;" aria-label="Preço Inicial: activate to sort column ascending">Preço Inicial</th>
                            <th style="width: 65px; " aria-label="Alvo 1: activate to sort column ascending">Alvo 1</th>                            
                            <th style="width: 38px; " aria-label="Stop: activate to sort column ascending">Stop</th>                                                        
                            <th style="width: 38px; " aria-label="Stop: activate to sort column ascending">Stop Up</th>                                                        
                            <th style="width: 0px; " aria-label="Status: activate to sort column ascending">Status</th>
                            <th style="width: 38px; " aria-label="Stop: activate to sort column ascending">Criado por</th>                            
                            <th style="width: 0px; " aria-label="Ações: activate to sort column ascending">Ações</th></tr>
                    </thead>
                    <tbody>
                        <?php $class = 'odd'; ?>
                        <?php foreach ($signal as $item) { ?>
                            <tr class="border-bottom {{$class}}" role="row">                                
                                <td >{{ $item->id }}</td>
                                <td >{{ $item->sended_at }}</td>
                                <td>{{ $item->getPair() }}</td>
                                <td>{{ $item->entry_value }}</td>
                                <td>{{ $item->target }}</td>
                                <td >{{ $item->stop }}</td>
                                <td >{{ $item->stop_up }}</td>                                
                                <td >{{ $item->getStatusName() }}</td>
                                <td >{{ $item->getCreatedBy() }}</td>
                                <td ><a href="#"><i data-placement="top" data-toggle="tooltip-primary" title="" class="ti-sharethis btn btn-info btn-sm" data-original-title="Enviar Telegram"></i></a> 
                                    <a href="{{ url('/signal/' . $item->id) }}" title="View Profile"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/signal/' . $item->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/signal' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>

                                </td>
                            </tr>
                            <?php $class = $class == 'odd' ? 'odd' : 'even'; ?>
                        <?php } ?>
                    </tbody>
                </table>               
            </div>

        </div>
    </div>
</div>
@endsection