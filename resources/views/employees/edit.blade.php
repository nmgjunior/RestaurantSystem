@extends('adminlte::page')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Editar Funcionário</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="/employee/update/{{$employee->id}}" method="POST">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label>Código do Funcionário</label>
                <input type="text" class="form-control" name="code" value="{{$employee->code}}">
              </div>
              <div class="form-group">
                <label>Nome do Funcionário</label>
                <input type="text" class="form-control" name="name" value="{{$employee->name}}">
              </div>
              <div class="form-group">

                

                <label>Áreas que o funcionário tem acesso</label>
                <input type="checkbox" name="role[]" value="2" 
                <?php if(in_array("2", $levels)){ echo " checked=\"checked\""; } ?>
                >Produtos<br>
                <input type="checkbox" name="role[]" value="3" 
                <?php if(in_array("3", $levels)){ echo " checked=\"checked\""; } ?>  
                >Funcionários<br>
                <input type="checkbox" name="role[]" value="4"
                <?php if(in_array("4", $levels)){ echo " checked=\"checked\""; } ?>
                >Pedidos<br>
                <input type="checkbox" name="role[]" value="5"
                <?php if(in_array("5", $levels)){ echo " checked=\"checked\""; } ?>
                >Cozinha<br>
                <input type="checkbox" name="role[]" value="6"
                <?php if(in_array("6", $levels)){ echo " checked=\"checked\""; } ?>
                >Caixa<br>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Editar</button>
            </div>
          </form>
        </div>
        </div>
    </div>

    @stop
  