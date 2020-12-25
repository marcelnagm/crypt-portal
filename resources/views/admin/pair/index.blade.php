@extends('layouts.app')

@section('content')
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12 col-lg-12 col-xl-6 d-block mx-auto">
                <div class="card">
                    <div class="card-header">Pairs</div>
                    <div class="card-body">
                        <p>
                          <a href="{{ url('/admin/pair/create') }}" class="btn btn-success btn-sm" title="Add New Pair">
                              <i class="fa fa-plus" aria-hidden="true"></i> Add New
                          </a>
                          <a href="{{ url('/admin/pair_generate') }}" class="btn btn-success btn-sm" title="Retrive From Binance">
                              <i class="fa fa-plus" aria-hidden="true"></i> Retrive From Binance
                          </a>
                        </p>
                        <div class="table-responsive">
                            <table id="example-1" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Pair</th><th>Main Coin</th><th>Sec Coin</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pair as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->pair }}</td><td>{{ $item->main_coin }}</td><td>{{ $item->sec_coin }}</td>
                                        <td>
                                            <a href="{{ url('/admin/pair/' . $item->id) }}" title="View Pair"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/pair/' . $item->id . '/edit') }}" title="Edit Pair"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/pair' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Pair" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
