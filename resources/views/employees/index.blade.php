
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Funcionários</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('create/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('create/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('create/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('create/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('create/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('create/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('create/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('create/css/main_index.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
                                    <th class="cell100 column1">Código</th>
                                    <th class="cell100 column2">Nome</th>
                                    <th class="cell100 column3"></th>
                                    <th class="cell100 column4"></th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>

                                @foreach($employees as $employee)
                                <tr class="row100 body">
                                <td class="cell100 column1">{{$employee->code}}</td>
                                    <td class="cell100 column2">{{$employee->name}}</td>
                                    <td class="cell100 column3">{{$employee->price}}</td>
                                    <td class="cell100 column4">
                                        <a class="btn btn-primary" href="/employee/edit/{{$employee->id}}" role="button">Editar</a>
                                    </td>
                                    <td class="cell100 column5">
                                        <a class="btn btn-danger" href="/employee/destroy/{{$employee->id}}" method="POST" role="button">Apagar</a>
                                    </td>

								</tr>
                                @endforeach
							</tbody>
						</table>
                    </div>
                </div>
                <a class="btn btn-success btn-lg" href="/employee/create" role="button">Novo Funcionário</a>

<!--===============================================================================================-->	
	<script src="{{ asset('create/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('create/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('create/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('create/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('create/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('create/js/main.js') }}"></script>

</body>
</html>