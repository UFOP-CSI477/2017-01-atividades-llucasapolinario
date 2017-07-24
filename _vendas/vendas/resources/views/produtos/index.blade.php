@extends('principal')

@section('conteudo')

<h1>Produto</h1>

@foreach($produtos as $p)
<p>{{$p->id}} - {{$p->nome}} - {{$p->preco}}</p>

@endforeach
@endsection
