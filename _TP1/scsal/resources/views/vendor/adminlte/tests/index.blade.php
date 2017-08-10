@extends('vendor.adminlte.home')

@section('conteudo')

<h1>
  @if (Auth::user()->type == 3)
    Seus
  @endif
  Exames
</h1>
@if (Auth::user()->type == 3)
<a class="btn btn-primary" href="/tests/create">Solicitar Exame</a>
@endif
 <div class="container-fluid spark-screen">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        @if (Auth::user()->type != 3)
          <th>Nome Paciente</th>
          <th>E-mail Paciente</th>
        @endif
        <th>Valor Procedimeto</th>
        <th>Data Prevista</th>
        <th>Procedimento</th>
        @if (Auth::user()->type == 3)
          <th>Editar</th>
          <th>Excluir</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($tests as $test)
      <tr>
        @if (Auth::user()->type == 3 && Auth::user()->id == $test->user_id)
          <td>{{ $test->id }}</td>
          <td>{{ App\Procedure::find($test->procedure_id)->name }}</td>
          <td>R$:{{ App\Procedure::find($test->procedure_id)->price }}</td>
          <td>{{ $test->date }}</td>
          <td><a href="/tests/{{ $test->id }}/edit"><i class="fa fa-pencil fa-fw"></i>Editar</a></td>
          <td><a href="/tests/{{ $test->id }}" ><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td>

        @elseif (Auth::user()->type != 3)
          <td>{{ $test->id }}</td>
          <td>{{ App\User::find($test->user_id)->name }}</td>
          <td>{{ App\User::find($test->user_id)->email }}</td>
          <td>R$:{{ App\Procedure::find($test->procedure_id)->price }}</td>
          <td>{{ $test->date }}</td>
          <td>{{ App\Procedure::find($test->procedure_id)->name }}</td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
