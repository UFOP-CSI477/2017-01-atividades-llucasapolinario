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
  </table>
  
  <h3>Quantidade Exame - {{$qtd}}</h3>
  <h3>Total:R$:{{$value}} </h3>

</div>

@endsection
