@extends('app')

@section('content')

<div class="container">
	<h3>Listagem das mães</h3>
	<a href=""></a>
	<table class="table">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Action</th>
		</tr>
		@foreach($maes as $mae)
		<tr>
			<td>{{ $mae->id }}</td>
			<td>{{ $mae->nome }}</td>
			<td>
				<a href="{{ route('maes.edit', ['id' => $mae->id]) }}"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button></a>
				<a href="{{ route('maes.destroy', ['id' => $mae->id]) }}"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</button></a>
			</td>
		</tr>
		@endforeach
	</table>
</div>


@endsection