@extends('app')

@section('content')

<div class="container">
	<h3>Editar mãe</h3>

	@if ($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	
	{!! Form::open(['route' => ['maes.update', $mae->id], 'method' => 'put' ]) !!}
	
	<div class="form-group">
		{!! Form::label('name', 'Nome:') !!}
		{!! Form::text('nome', $mae->nome, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Save Mãe', 
		['class' => 'btn btn-primary']) !!}
	</div>
	
	{!! Form::close() !!}
</div>


@endsection