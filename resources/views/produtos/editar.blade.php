@extends('app')

@section('content')
<div class="container">
	<h1>Editar Produto</h1>
	
	@if ($errors->any())
		<ul >
			@foreach ($errors->all() as $error)
				<li class="alert alert-danger">{{ $error }}</li>
			@endforeach
		</ul>
	@endif


	{!! Form::open(['route' => ['products.update', $product->id], 'method' => 'put' ]) !!}
	<div class="form-group">
		{!! Form::label('category', 'Category: ')  !!}
		{!! Form::select('category_id', $categories, $product->category->id, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('name', 'Nome: ')  !!}
		{!! Form::text('name',  $product->name , ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Descrição: ')  !!}
		{!! Form::textarea('description', $product->description , ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('price', 'Preço: ')  !!}
		{!! Form::text('price', $product->price , ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('recommended', 'Recommended: ')  !!}
		{!! Form::checkbox('recommended', $product->recommended)  !!}
	</div>
	<div class="form-group">
		{!! Form::label('featured', 'Featured: ')  !!}
		{!! Form::checkbox('featured', $product->featured)  !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Save Product', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
	
	
</div>


@endsection