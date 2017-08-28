@extends('adm')

@section('conteudo')

<h1>Registros</h1>
<a class="btn btn-primary right" href="/equipamentos">voltar</a>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" role="form" method="post" action="/equipamentos/{{$equipamento->id}}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <fieldset>

          <!-- Form Name -->
          <legend>Editar Equipamento</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Equipamento id</label>
            <div class="col-sm-10">
              <input type="number" name="id" value="{{$equipamento->id}}" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Descrição</label>
            <div class="col-sm-10">
              <input type="text"  name="nome" value="{{$equipamento->nome}}" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

@endsection
