@extends ('adminlte::page')

@section ('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Nova Comanda</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="/order/store" method="post">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label for="desproduct">Código da Comanda</label>
                <input type="text" class="form-control" name="code">
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
          </form>
        </div>
        </div>
    </div>
  
@endsection