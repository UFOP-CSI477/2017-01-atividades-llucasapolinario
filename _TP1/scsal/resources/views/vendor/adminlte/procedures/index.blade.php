@extends('vendor.adminlte.home')

@section('conteudo')

<h1>
  @if (Auth::user()->type == 3)
    Seus
  @endif
  Procedimentos
</h1>
@if (Auth::user()->type == 1)
<a class="btn btn-primary" href="/procedures/create">Inserir</a>
@endif
 <div class="container-fluid spark-screen">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Adm que criou</th>
        <th>E-mail </th>
          <th>Editar</th>
        @if (Auth::user()->type == 1)
          <th>Excluir</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($procedures as $procedure)
      <tr>
          <td>{{ $procedure->name }}</td>
          <td>{{ $procedure->price }}</td>
          <td>{{ App\User::find($procedure->user_id)->name }}</td>
          <td>{{ App\User::find($procedure->user_id)->email }}</td>
          <td><a href="/procedures/{{ $procedure->id }}/edit"><i class="fa fa-pencil fa-fw"></i>Editar</a></td>
          @if (Auth::user()->type == 1)
            @if(!$procedure->Test->first())
                <td><a href="/procedures/{{ $procedure->id }}"><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td>
            @endif
          @endif
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
