@extends('vendor.adminlte.home')

@section('conteudo')

<h1>Excluir Procedures</h1>
<a class="btn btn-primary" href="/procedures">Voltar</a>
<!-- <div class="container-fluid spark-screen"> -->



  <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <legend></legend>
        <legend>Id:              {{ $procedure->id }}<br>
        Nome:            {{ $procedure->name }}<br>
        Preço :          {{ $procedure->price }}<br>
        ID do Usuario :  {{ $procedure->user_id }}</legend>

        <form class="form-horizontal" role="form" method="post" action="/procedures/{{ $procedure->id }}">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a class="btn btn-default" href="/procedures/{{ $procedure->id }}/edit"><i class="fa fa-pencil fa-fw"></i>Editar</a>
        <input class="btn btn-primary" type="submit" value="Confirmar exclusão">

  </form>
<!-- </div> -->

@endsection
