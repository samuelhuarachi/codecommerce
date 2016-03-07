@extends('app')

@section('content')
<div class="container">
	<h1>Novo Produto</h1>
	
	@if ($errors->any())
		<ul >
			@foreach ($errors->all() as $error)
				<li class="alert alert-danger">{{ $error }}</li>
			@endforeach
		</ul>
	@endif


	{!! Form::open(['route' => 'products']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nome: ')  !!}
		{!! Form::text('name', null, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Descrição: ')  !!}
		{!! Form::textarea('description', null, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('price', 'Preço: ')  !!}
		{!! Form::text('price', null, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add Product', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
	
	
</div>


@endsection