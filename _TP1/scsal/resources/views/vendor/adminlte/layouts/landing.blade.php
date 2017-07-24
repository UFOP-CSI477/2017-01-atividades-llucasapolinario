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
    <!-- <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" /> -->
<!--
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" /> -->

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
                    <li class="active"><a href="#home" class="smoothScroll">{{ trans('message.home') }}</a></li>
                    <li><a href="#desc" class="smoothScroll">{{ trans('message.address') }}</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
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
                    <!-- <div class="col-lg-2">
                        <h5>Ultimos procesimentos</h5>
                        <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
                    </div>
                    <div class="col-lg-8">
                        <img class="img-responsive" src="{{ asset('/img/app-bg.png') }}" alt="">
                    </div>
                    <div class="col-lg-2">
                        <br>
                        <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                        <h5>{{ trans('message.paramaisefetueologin') }}</h5>
                        <p>... {{ trans('message.by') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a> {{ trans('message.at') }} <a href="http://acacha.org">acacha.org</a> {{ trans('message.readytouse') }}</p>
                    </div> -->
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>

    <section id="desc" name="desc">
        <!-- INTRO WRAP -->
        <div id="intro">
            <div class="container">
                <div class="row centered">
                    <!-- <h1>{{ trans('message.designed') }}</h1> -->
                    <h1>Últimos procedimentos</h1>
                    <br>
                    <br>
                    <!-- <div class="col-lg-4">
                        <img src="{{ asset('/img/intro01.png') }}" alt="">
                        <h3>{{ trans('message.community') }}</h3>
                        <p>{{ trans('message.see') }} <a href="https://github.com/acacha/adminlte-laravel">{{ trans('message.githubproject') }}</a>, {{ trans('message.post') }} <a href="https://github.com/acacha/adminlte-laravel/issues">{{ trans('message.issues') }}</a> {{ trans('message.and') }} <a href="https://github.com/acacha/adminlte-laravel/pulls">{{ trans('message.pullrequests') }}</a></p>
                    </div> -->
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro02.png') }}" alt="">
                        <h3>{{ trans('message.schedule') }}</h3>
                        <p>Para obter os resultados efetue o Login.</p>
                        <!-- <h5>{{ trans('message.paramaisefetueologin') }}</h5> -->
                    </div>
                    <!-- <div class="col-lg-4">
                        <img src="{{ asset('/img/intro03.png') }}" alt="">
                        <h3>{{ trans('message.monitoring') }}</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div> -->
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
                    <b>LaraLabora </b> Desenvolvido pelo aluno: Lucas Apolinário Figueiredo
                    <a href="mailto:apolinario_lucas_@hotmail.com">apolinario_lucas_@hotmail.com</a>.<br/>
                    <strong>LaraLabora &copy; 2017. CSI477-Sistemas-Web, ICEA-UFOP, João Monlevade - MG <br></strong>
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
