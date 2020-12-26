@extends('layouts.app')

@section('content')
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12 col-lg-12 col-xl-6 d-block mx-auto">
                <div class="card">
                    <div class="card-header">Edit Pair #{{ $pair->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/pair') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/pair/' . $pair->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.pair.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
