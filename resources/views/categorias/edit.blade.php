@extends('app')

@section('content')
<div class="container">
	<h1>Editar Categoria {{ $findCategory->name }}</h1>
	
	@if ($errors->any())
		<ul >
			@foreach ($errors->all() as $error)
				<li class="alert alert-danger">{{ $error }}</li>
			@endforeach
		</ul>
	@endif


	{!! Form::open(['route' => ['categories.update', $findCategory->id], 'method' => 'put' ]) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nome: ')  !!}
		{!! Form::text('name', $findCategory->name, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Descrição: ')  !!}
		{!! Form::textarea('description', $findCategory->description, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Salvar Categoria', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
	
	
</div>


@endsection