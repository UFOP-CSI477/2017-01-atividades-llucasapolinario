@extends('principal')

@section('conteudo')

<h1>Produto</h1>

@foreach($produtos as $p)
<p>{{$p->id}} - {{$p->nome}} - {{$p->preco}} -
  <a href="/produtos/{{$p->id}}/edit">Editar</a>
  <a href="/produtos/{{$p->id}}">Delete</a>
</p>

@endforeach
@endsection
