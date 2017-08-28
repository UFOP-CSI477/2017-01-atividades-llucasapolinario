@extends('principal')

@section('conteudo')

  <h1>Edit Produto</h1>

    <form action="/produtos/{{$produto->id}}" method="post">

      {{csrf_field()}} <!-- token  -->
      {{method_field('PATCH')}}

      Nome: <input type="text" name="nome" maxlength="100" value="{{$produto->nome}}"><br>
      Preço: <input type="text" name="preco" value="{{$produto->preco}}"><br>

      <input type="submit" name="botaoSalvar" value="Salvar">

    </form>
@endsection
