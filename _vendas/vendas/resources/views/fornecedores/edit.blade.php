@extends('principal')

@section('conteudo')

  <h1>Edit Produto</h1>

    <form action="/fornecedores/{{$fornecedore->id}}" method="post">

      {{csrf_field()}} <!-- token  -->
      {{method_field('PATCH')}}

      Nome: <input type="text" name="nome" maxlength="100" value="{{$fornecedore->nome}}"><br>
      Nome Fantasia: <input type="text" name="nomeFantasia" value="{{$fornecedore->nomeFantasia}}"><br>
      Telefone: <input type="text" name="telefone"  value="{{$fornecedore->telefone}}"><br>

      <input type="submit" name="botaoSalvar" value="Salvar">

    </form>
@endsection
