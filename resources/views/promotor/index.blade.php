@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Promotores</div>

				<div class="panel-body">
					@foreach($promotores as $promotor)
						<p> {{ $promotor->apellidos }}, {{ $promotor->nombres }} | {{ $promotor->email }} | {{ $promotor->celular }} |  {{ $promotor->created_at }}  </p>
					@endforeach()
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
