@extends('vendor.adminlte.home')

@section('conteudo')
<h1>
  Relatórios
</h1>
 <div class="container-fluid spark-screen">
  <table class="table table-hover">

    <thead>
      <tr>
        <th>Exames</th>
        <th>Procedimentos</th>
        <th>Valor</th>
      </tr>
    </thead>

    <tbody>
      <?php $value =0 ?>
      <?php $qtd =0 ?>
      @foreach($tests = App\Test::all() as $test)
      <tr>
          <td>{{$test->date}}</td>
          <td>{{$test->Procedure->name}}</td>
          <td>R$:{{$test->Procedure->price}}</td>
          <?php $value += $test->Procedure->price?>
          <?php $qtd++?>
      </tr>
      @endforeach

    </tbody>

    <tfoot>
      <tr>
          <td></td>
      </tr>
      <tr>
        <td>Quantidade Exame</td>
        <td></td>
        <td>{{$qtd}}</td>
      </tr>
      <tr>
        <td>Total:</td>
        <td></td>
        <td>R$:{{$value}} </td>
      </tr>
    </tfoot>

  <!-- <tfoot>
    <tr>
      <td colspan="2"> Total de alunos </td>
      <td>3</td>
    </tr>
  </tfoot> -->

  </table>
</div>

@endsection
