@extends ('adminlte::page')
@section('title', 'Produtos')
@section ('content')
<table class="table">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Código</th>
		<th scope="col">Nome</th>
		<th scope="col">Preço</th>
		<th scope="col"></th>
		<th scope="col"></th>
	  </tr>
	</thead>
	<tbody>
		@foreach($products as $product)
	  <tr>
		<th scope="row">{{$product->id}}</th>
		<td>{{$product->code}}</td>
		<td>{{$product->name}}</td>
		<td>{{$product->price}}</td>
		<td>
			<a class="btn btn-primary" href="/product/edit/{{$product->id}}" role="button">Editar</a>
		</td>
		<td>
			<a class="btn btn-danger" href="/product/delete/{{$product->id}}" role="button">Apagar</a>
		</td>
	  </tr>
	  @endforeach
	</tbody>
  </table>
  <a class="btn btn-success btn-lg" href="/product/create" role="button">Novo Produto</a>

@stop