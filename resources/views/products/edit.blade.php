@extends('adminlte::page')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Editar Produto</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="/product/update/{{$product->id}}" method="POST">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label>Código</label>
                <input type="text" class="form-control" name="code" value="{{$product->name}}">
              </div>
              <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="name" value="{{$product->code}}">
              </div>
              <div class="form-group">
                <label>Preço</label>
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
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
  