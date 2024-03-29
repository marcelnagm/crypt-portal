   @extends('layout_user')

@section('content')
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12 col-lg-12 col-xl-6 d-block mx-auto">
                <div class="card">
                    <div class="card-header">Adicionar novo sinal</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/signal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/user/op') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('user.signal.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
