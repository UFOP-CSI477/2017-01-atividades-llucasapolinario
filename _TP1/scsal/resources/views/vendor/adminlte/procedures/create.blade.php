@extends('vendor.adminlte.home')

@section('conteudo')

<h1>Procedures</h1>
<a class="btn btn-primary right" href="/procedures">voltar</a>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" role="form" method="post" action="/procedures">
        {{ csrf_field() }}
        <fieldset>

          <legend>Criar Procedure</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nome</label>
            <div class="col-sm-10">
              <input type="text" name="name" placeholder="Raiox" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Preço</label>
            <div class="col-sm-10">
              <input type="number" step="0.01" name="price" placeholder="87.90" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Id do usuário</label>
            <div class="col-sm-10">
              <input type="number" name="user_id" readonly="readonly" value="{{ Auth::user()->id }}" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

@endsection
