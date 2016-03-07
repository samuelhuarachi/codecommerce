@extends('app')

@section('content')

<div class="container">
	<h3>Nova mãe</h3>

	@if ($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	
	{!! Form::open(['url' => 'maes']) !!}
	
	<div class="form-group">
		{!! Form::label('name', 'Nome:') !!}
		{!! Form::text('nome', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Add Category', ['class' => 'btn btn-primary']) !!}
	</div>
	
	{!! Form::close() !!}
</div>


@endsection