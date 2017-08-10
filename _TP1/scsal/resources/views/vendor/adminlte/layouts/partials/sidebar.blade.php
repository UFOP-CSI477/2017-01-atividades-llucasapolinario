<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>
        @endif
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
            @if (Auth::user()->type == 1)
              <li><a href="/procedures"><i class='fa fa-link'></i> <span>Procedimentos</span></a>
              <li><a href="/pacientes"><i class='fa fa-link'></i> <span>Pacientes</span></i></a></li>
              <li><a href="/relatorio"><i class='fa fa-link'></i> <span>Relatório</span></a></li>
            @elseif (Auth::user()->type == 2)
              <li><a href="/procedures"><i class='fa fa-link'></i> <span>Procedimentos</span></a>
            @endif
            <li><a href="/tests"><i class='fa fa-link'></i> <span>Exames</span></a></li>
            </p>

        </ul>
    </section>
</aside>
