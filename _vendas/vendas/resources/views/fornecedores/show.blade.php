@extends('principal')

@section('conteudo')

  <h1>Excluir Fornecedor</h1>

  <p>Nome: {{$fornecedore->nome}}</p>
  <p>Nome Fantasia: {{$fornecedore->nomeFatasia}}</p>
  <p>telefone R$: {{$fornecedore->telefone}}</p>

  <form action="/fornecedores/{{$fornecedore->id}}" method="post">
     {{ csrf_field() }} <!--toquem de garantia de acesso -->
     {{ method_field('DELETE') }} <!-- sobrescreve o post. filtro da rota para o metodo correspondente -->
     <input type="submit" value="Confirmar exclusão">
  </form>
@endsection
