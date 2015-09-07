@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Menu</div>

				<div class="panel-body">
					{{ dump($menus) }}
					@foreach($menus as $menu)
						<p> {{ $menu->titulo }} | {{ $menu->ruta }} | {{ dump($menu->menuPadre() ) }} | {{ $menu->created_at }} | {{ dump($menu->menus() ) }}  </p>
					@endforeach()
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
