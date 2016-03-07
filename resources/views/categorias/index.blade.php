@extends('app')

@section('content')
<div class="container">
	<h1>Listando Categorias</h1>
	<a href="{{ route('categories.create') }}" class="btn btn-default">Adicionar</a>
	<br>
	<br>
					
	<table class="table">
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Descrição</td>
			<td>Opções</td>
		</tr>
		
		@foreach ($allCategories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ $category->description }}</td>
				<td>
					<a href="{{ route('categories.edit', ['id' => $category->id]) }}">Edit</a>
					<a href="{{ route('categories.destroy', ['id' => $category->id]) }}">Excluir</a>

				</td>
			</tr>
		@endforeach

	</table>
</div>


@endsection