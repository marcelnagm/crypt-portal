@extends('layout_guest')

@section('content')
<div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
    <div class="card bg-primary">
        <div class="card-body">
            <div class="d-flex no-block align-items-center">
                <div>
                    <h6 class="text-white">Status do Robô</h6>
                    <h2 class="text-white m-0 ">Desativado</h2>
                </div>
                <div class="ml-auto"> <span class="text-white display-6"><i class="fas fa-robot fa-2x"></i></span> </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-lg-6 col-xl-6 mx-auto">
        <div class="panel price panel-color">
            <div class="panel-heading bg-primary p-0 text-center">
                <h3>Auto Crypto Trading</h3>
            </div>
            <div class="panel-body text-center">
                <p class="lead"><strong>R$ 70</strong> mês</p>
            </div>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item"><strong> Operação automatizadas</strong></li>
                <li class="list-group-item"><strong> Sinais diários</strong></li>
                <li class="list-group-item"><strong> Segurança sobre seu capital </strong></li>
                <li class="list-group-item border-bottom-0"><strong> Suporte técnico</strong></li>
            </ul>
            <div class="panel-footer text-center"> <a class="btn btn-primary" href="#">Assinar</a> </div>
        </div>
    </div>
</div> 
@endsection