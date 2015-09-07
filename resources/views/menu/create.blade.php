@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Crear nuevo Menú</div>

				<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Oops!</strong> Existe algunos errores con los datos.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open([
					        'route'         => 'menu.store',
					        'autocomplete'  => 'off'
					    ])
					!!}
					<div class="form-group">
					    <div class="input-group">
					        <span class="input-group-addon"><span class="fui-mail"></span></span>
					        {!! Form::text('titulo', old('titulo'), [
					                'class'         => 'form-control',
					                'placeholder'   => 'Titulo del menú'
					            ])
					        !!}
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					        <span class="input-group-addon"><span class="fui-user"></span></span>
					        {!! Form::text('ruta', old('ruta'), [
					                'class'         => 'form-control',
					                'placeholder'   => 'URL del menú'
					            ])
					        !!}
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					        <span class="input-group-addon"><span class="fui-lock"></span></span>
					        {!! Form::selectRange('nivel', 1, 10, old('nivel'), [
					                'class'         => 'form-control',
					                'placeholder'   => 'Contraseña'
					            ])
					        !!}
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					        <span class="input-group-addon"><span class="fui-lock"></span></span>
					        {!! Form::selectRange('menu_padre_id', 0, 3, old('nivel'), [
					                'class'         => 'form-control',
					                'placeholder'   => 'Repetir contraseña'
					            ])
					        !!}
					    </div>
					</div>
					<div class="form-action">
					    {!! Form::submit('Guardar', [
					            'class' => 'btn btn-embossed btn-success btn-hg btn-block'
					        ])
					    !!}
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
