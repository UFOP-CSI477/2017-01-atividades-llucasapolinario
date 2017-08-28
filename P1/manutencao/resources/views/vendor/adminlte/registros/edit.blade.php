@extends('vendor.adminlte.home')

@section('conteudo')

<h1>Procedures</h1>
<a class="btn btn-primary right" href="/procedures">voltar</a>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" role="form" method="post" action="/procedures/{{ $procedure->id }}">

        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <fieldset>
          <legend>Editar Procedure</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nome</label>
            <div class="col-sm-10">
              <input type="text" name="name" value="{{ $procedure->name }}" class="form-control">
            </div>
          </div>

          <!-- decimal input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Preço</label>
            <div class="col-sm-10">
              <input type="decimal" name="price" value="{{ $procedure->price }}" class="form-control">
            </div>
          </div>

          <!-- number input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Id do usuário</label>
            <div class="col-sm-10">
              <input type="number" name="user_id" value="{{$procedure->user_id}}" class="form-control">
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
    </div>
</div>

@endsection
