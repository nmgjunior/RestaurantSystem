@extends ('adminlte::page')


@section ('content')
<table class="table">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Código</th>
		<th scope="col">Nome</th>
		<th scope="col"></th>
		<th scope="col"></th>
	  </tr>
	</thead>
	<tbody>
		@foreach($employees as $employee)
	  <tr>
		<th scope="row">{{$employee->id}}</th>
		<td>{{$employee->code}}</td>
		<td>{{$employee->name}}</td>
		<td>
			<a class="btn btn-primary" href="/employee/edit/{{$employee->id}}" role="button">Editar</a>
		</td>
		<td>
			<a class="btn btn-danger" href="/employee/delete/{{$employee->id}}" role="button">Apagar</a>
		</td>
	  </tr>
	  @endforeach
	</tbody>
  </table>
  <a class="btn btn-success btn-lg" href="/employee/create" role="button">Novo Funcionário</a>

@stop