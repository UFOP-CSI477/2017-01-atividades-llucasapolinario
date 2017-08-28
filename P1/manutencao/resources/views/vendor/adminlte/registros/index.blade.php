@extends('adm')

@section('conteudo')

<h1>Registros</h1>
<a class="btn btn-primary" href="/registros/create">Inserir</a>
 <div class="container-fluid spark-screen">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Data limite</th>
        <th>Nome Equipamento</th>
        <th>Tipo manutenção</th>
        <th>Descrição</th>
        <!-- <th>Editar</th> -->
        <!-- <th>Excluir</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($equipamentos = App\Registro::orderBy('datalimite')->get() as $equipamento)
      <tr>
        <td>{{ $equipamento->datalimite }}</td>
        <td>{{ $equipamento->equipamento_id}}</td>
        <td>{{ $equipamento->tipo}}</td>
        <td>{{ $equipamento->descricao }}</td>

            <!-- <td><a href="/equipamentos/{{ $equipamento->id }}/edit"><i class="fa fa-pencil fa-fw"></i>Editar</a></td> -->
            <!-- <td><a href="/equipamentos/{{ $equipamento->id }}"><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td> -->
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
