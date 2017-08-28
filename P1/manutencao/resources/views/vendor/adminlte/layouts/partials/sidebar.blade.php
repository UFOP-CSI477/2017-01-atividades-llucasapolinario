<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <!-- @if (! Auth::guest()) -->
            <!-- <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>ADM</p>
                </div>
            </div> -->
        <!-- @endif -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <!-- <li class=""><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li> -->
            <!-- <li class="active">
                <a href="/procedimentos"><i class='fa fa-link'></i> <span>Procedimentos</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Listar</a></li>
                    <li><a href="#">Cadastrar</a></li>
                </ul>
            </li> -->
            <!-- <a href="/home">{{ Auth::user()->name }} -->
            <!-- @if (Auth::user()->type == 1) -->
              <li class="active"><a href="/registros"><i class='fa fa-link'></i> <span>Registros</span></a>
              <li><a href="/equipamentos"><i class='fa fa-link'></i> <span>Equipamentos</span></a></li>
              <li><a href="/relatorio"><i class='fa fa-link'></i> <span>Relatório</span></i></a></li>
            <!-- @else -->
              <!-- <li class="active"><a href="/registros"><i class='fa fa-link'></i> <span>Registros</span></a> -->
            <!-- @endif -->
            <!-- </p> -->

        </ul>
    </section>
</aside>
