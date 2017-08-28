@extends('principal')

@section('conteudo')

<h1>fornecedores</h1>

@foreach($fornecedores as $f)
<p>{{$f->id}} - {{$f->nome}} - {{$f->nomeFantasia}}- {{$f->telefone}}
  <a href="/fornecedores/{{$f->id}}/edit">Editar</a>
  <a href="/fornecedores/{{$f->id}}">Delete</a>
</p>
@endforeach
@endsection
