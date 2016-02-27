<h1>Listando Categorias</h1>

<ul>
	
	@foreach($allCategories as $category)
		<li>{{ $category->name }}</li>
		<li>{{ $category->description }}</li>
		<li><hr></li>
	@endforeach

</ul>
