@extends ('adminlte::page')

@section('title', 'Funcionários')

@section ('content')
<table class="table">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Código</th>
		<th scope="col"></th>
		<th scope="col"></th>
	  </tr>
	</thead>
	<tbody>
		@foreach($orders as $order)
	  <tr>
		<th scope="row">{{$order->id}}</th>
		<td>{{$order->code}}</td>
		<td>
			<a class="btn btn-primary" href="/order/edit/{{$order->id}}" role="button">Editar</a>
		</td>
		<td>
			<a class="btn btn-danger" href="/order/delete/{{$order->id}}" role="button">Apagar</a>
		</td>
	  </tr>
	  @endforeach
	</tbody>
  </table>
  <a class="btn btn-success btn-lg" href="/order/create" role="button">Nova Comanda</a>

@stop