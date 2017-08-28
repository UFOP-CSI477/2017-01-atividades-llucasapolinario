@extends('adm')

@section('conteudo')

<h1>Registros</h1>
<a class="btn btn-primary" href="/equipamentos/create">Inserir</a>
 <div class="container-fluid spark-screen">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome Equipamento</th>
        <th>Editar</th>
        <!-- <th>Excluir</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($equipamentos = App\Equipamento::orderBy('nome')->get() as $equipamento)
      <tr>
        <td>{{ $equipamento->id }}</td>
        <td>{{ $equipamento->nome }}</td>
        <!-- <td>{{ $equipamento->tipo}}</td> -->
        <!-- <td>{{ $equipamento->descricao }}</td> -->

            <td><a href="/equipamentos/{{ $equipamento->id }}/edit"><i class="fa fa-pencil fa-fw"></i>Editar</a></td>
            <!-- <td><a href="/equipamentos/{{ $equipamento->id }}"><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td> -->
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
