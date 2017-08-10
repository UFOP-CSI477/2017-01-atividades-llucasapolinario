<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('message.landingdescription') }}" />

    <title>{{env('APP_NAME')}}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>{{env('APP_NAME')}}</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="#home" class="smoothScroll">Área Geral</a></li>
                    <li><a href="#desc" class="smoothScroll">Sobre</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <!-- <li><a href="{{ url('/login') }}">{{ trans('message.login') }}</a></li> -->

                        <li ><a href="{{ url('/login') }}">Paciente</a></li>
                        <li ><a href="{{ url('/login') }}">Operador</a></li>
                        <li ><a href="{{ url('/login') }}">Administrador</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('message.register') }}</a></li>
                    @else
                        <li>
                          <a href="/procedures">{{ Auth::user()->name }}
                            @if (Auth::user()->type == 1)
                              - Administrador
                            @elseif (Auth::user()->type == 2)
                              - Operador
                            @else
                              - Paciente
                            @endif
                          </a>
                        </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <h1>{{env('APP_NAME')}}</h1>
                        <h3>Laboratório de confiança, qualidade e que te informa os resultados de seu exame a um click de distância.</h3>
                        <!-- <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">{{ trans('message.gedstarted') }}</a></h3> -->
                    </div>
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>

    <section id="desc" name="desc">
        <!-- INTRO WRAP -->
        <div id="intro">
            <div class="container">
                <div class="row centered">

                    <div class="container-fluid spark-screen">
                      <h2>Últimos procedimentos</h2>
                      <!-- <p>The .table-hover class enables a hover state on table rows:</p> -->
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Preço</th>
                            <!-- <th>Id do Usuário</th> -->
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($procedures = App\Procedure::orderBy('name') as $p)
                          <tr>
                            <td>{{ $p->name }}</td>
                            <td>R$:{{ $p->price }}</td>
                            <!-- <td>{{ $p->user_id }}</td> -->
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                </div>
                <br>
                <hr>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

        <!-- FEATURES WRAP -->
    </section>

    <footer>
        <div id="c">
            <div class="container">
                <p>
                    <b>{{env('APP_NAME')}} </b> Desenvolvido pelo aluno: Lucas Apolinário Figueiredo
                    <a href="mailto:apolinario_lucas_@hotmail.com">apolinario_lucas_@hotmail.com</a>.<br/>
                    <strong>{{env('APP_NAME')}} &copy; 2017. CSI477-Sistemas-Web, ICEA-UFOP, João Monlevade - MG <br></strong>
                    <a href="https://github.com/llucasapolinario">Github TP1 - CSI477-Sistemas-Web </a>
                    <br/>
                </p>
            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
