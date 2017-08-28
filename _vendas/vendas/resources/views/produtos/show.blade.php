@extends('principal')

@section('conteudo')

  <h1>Excluir Produto</h1>

  <p>Id: {{$produto->id}}</p>
  <p>Nome: {{$produto->nome}}</p>
  <p>Preco R$: {{$produto->preco}}</p>

  <form action="/produtos/{{$produto->id}}" method="post">
     {{ csrf_field() }} <!--toquem de garantia de acesso -->
     {{ method_field('DELETE') }} <!-- sobrescreve o post. filtro da rota para o metodo correspondente -->
     <input type="submit" value="Confirmar exclusão">
  </form>
@endsection
