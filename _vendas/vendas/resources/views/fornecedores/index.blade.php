@extends('principal')

@section('conteudo')

<h1>fornecedores</h1>

@foreach($fornecedores as $f)
<p>{{$f->id}} - {{$f->nome}} - {{$f->nomeFantasia}}</p>

@endforeach
@endsection
