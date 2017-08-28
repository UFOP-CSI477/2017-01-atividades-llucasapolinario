@extends('adm')

@section('conteudo')

<h1>Registros</h1>
<a class="btn btn-primary right" href="/registros">voltar</a>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" role="form" method="post" action="/registros">
        {{ csrf_field() }}
        <fieldset>

          <!-- Form Name -->
          <legend>Criar Registro</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Equipamento</label>
            <div class="col-sm-10">
              <input type="number" name="equipamento_id" placeholder="1" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Descrição</label>
            <div class="col-sm-10">
              <input type="text"  name="descricao" placeholder="..." class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Data Limite</label>
            <div class="col-sm-10">
              <input type="date" name="datalimite">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Tipo</label>
            <div class="col-sm-10">
              <input type="number" name="tipo" placeholder="1, 2 ou 3" class="form-control">
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
