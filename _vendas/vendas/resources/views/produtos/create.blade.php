@extends('principal')

@section('conteudo')

  <h1>Inserir Produto</h1>
    <form action="/produtos" method="post">

      {{csrf_field() }}
      
      Nome: <input type="text" name="nome" maxlength="100"><br>
      Preço: <input type="text" name="preco"><br>

      <input type="submit" name="botaoSalvar" value="Salvar">

    </form>
@endsection
