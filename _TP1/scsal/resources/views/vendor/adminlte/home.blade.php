@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('message.home') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border"></div>
					<div class="box-body">
						@yield('conteudo')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
