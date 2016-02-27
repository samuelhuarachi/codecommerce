<h1>Listando Produtos</h1>

<ul>
	
	@foreach($allProduct as $produto)
		<li>{{ $produto->name }}</li>
		<li>{{ $produto->description }}</li>
		<li>{{ $produto->price }}</li>
		<li><hr></li>
	@endforeach

</ul>