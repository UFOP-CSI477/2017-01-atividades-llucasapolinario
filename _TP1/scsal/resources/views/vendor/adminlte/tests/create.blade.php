@extends('vendor.adminlte.home')

@section('conteudo')

<h1>Tests</h1>
<a class="btn btn-primary right" href="/tests">voltar</a>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" role="form" method="post" action="/tests">
        {{ csrf_field() }}
        <fieldset>

          <legend>Criar Test</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Id do usuário</label>
            <div class="col-sm-9">
              <input type="number" name="user_id" readonly="readonly" value="{{ Auth::user()->id }}" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Id do usuário</label>
            <div class="col-sm-9">
              <input type="date" name="date"  class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Procedimento</label>
            <span><i aria-hidden="true"></i></span>
              <select class="col-sm-6 form-control" name="procedure_id">
                <!-- <option value="">Selecione...</option> -->
                @foreach($procedures as $procedure)
                  <option value="{{$procedure->id}}">{{$procedure->name}}</option>
                @endforeach
              </select>
          </div>
          <!-- <input type="number" name="procedure_id" placeholder="2" class="form-control"> -->

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
</div>

@endsection
