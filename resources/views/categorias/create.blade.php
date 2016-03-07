@extends('app')

@section('content')
<div class="container">
	<h1>Nova Categoria</h1>
	
	@if ($errors->any())
		<ul >
			@foreach ($errors->all() as $error)
				<li class="alert alert-danger">{{ $error }}</li>
			@endforeach
		</ul>
	@endif


	{!! Form::open(['route' => 'categories']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nome: ')  !!}
		{!! Form::text('name', null, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Descrição: ')  !!}
		{!! Form::textarea('description', null, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add Category', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
	
	
</div>


@endsection