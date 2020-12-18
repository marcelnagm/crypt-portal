@extends('layout');

@section('title', 'Listando todos os registros');
<!--@section('menu', 'memuadmin.app');-->

 
@section('content')
<h1>Listagem de Profiles</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>#</th>
          <th>Nome</th>
          <th>
        <a href="{{ route('profile.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($customers as $customer)
      <tr>
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->name }}</td>
          <td>
              
        <a href="{{ url('profile/'. $customer->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a>
        <form method="POST" action="{{ url('profile/'. $customer->id.'/destroy') }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
          </td>
      </tr>
      @empty
      <tr>
          <td colspan="6">Nenhum registro encontrado para listar</td>
      </tr>
      @endforelse
        </tbody>
    </table>
</div>
@endsection