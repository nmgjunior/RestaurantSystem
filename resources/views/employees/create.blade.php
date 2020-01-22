@extends('adminlte::page')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Novo Funcionário</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="/employee/store" method="post">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label>Código do Funcionário</label>
                <input type="text" class="form-control" name="code">
              </div>
              <div class="form-group">
                <label>Nome do Funcionário</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label>Senha do Funcionário</label>
                <input type="text" class="form-control" name="password">
              </div>
              <div class="form-group">
                <label>Áreas que o funcionário tem acesso</label>
                <input type="checkbox" name="role[]" value="2">Produtos<br>
                <input type="checkbox" name="role[]" value="3">Funcionários<br>
                <input type="checkbox" name="role[]" value="4">Pedidos<br>
                <input type="checkbox" name="role[]" value="5">Cozinha<br>
                <input type="checkbox" name="role[]" value="6">Caixa<br>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
          </form>
        </div>
        </div>
    </div>

    @stop
  