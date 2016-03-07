@extends('app')

@section('content')
<div class="container">
	<h1>Listando Produtos</h1>
	<a href="{{ route('products.create') }}" class="btn btn-default">Adicionar</a>
	<br>
	<br>
					
	<table class="table">
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Descrição</td>
			<td>Preço</td>
			<td>Categoria</td>
			<td>Opções</td>
		</tr>
		
		@foreach ($allProdutos as $produtos)
			<tr>
				<td>{{ $produtos->id }}</td>
				<td>{{ $produtos->name }}</td>
				<td>{{ $produtos->description }}</td>
				<td>{{ $produtos->price }}</td>
				<td>{{ $produtos->category->name }}</td>
				
				<td>
					<a href="{{ route('products.edit', ['id' => $produtos->id]) }}">Edit</a>
					| <a href="{{ route('products.destroy', ['id' => $produtos->id]) }}">Excluir</a>

				</td>
			</tr>
		@endforeach

	</table>
</div>


@endsection