@extends('layouts.app')

@section('content')
<!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}"> 
  <!-- summernote -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <div class="container">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/home">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container">
              <div class="card">
                <div class="card-body">
                  <h2 class="text-center"><a href="">List Product</a></h2>
                  <div class="form-group">
                    <a href="/product/add" class="btn btn-primary" role="button">Add Product</a>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <tr>
                          <th>Url</th>
                          <th>Category Name</th>
                          <th>Product Name</th>
                          <th>Image</th>
                          <th>Price</th>
                          <th>Description</th>
                          <th>Actions</th>
                      </tr>
                      @foreach($products as $listproduct)
                      <tr>
                        <td>{{ $listproduct->url }}</td>
                        <td>{{ $listproduct->category_name }}</td>
                        <td>{{ $listproduct->product_name }}</td>
                        <td><img src="{{ URL::asset('upload/' . $listproduct->image) }}" width="100px;" height="100px;" alt="image"></td>
                        <td>{{ $listproduct->price }}</td>
                        <td>{{ $listproduct->description }}</td>
                        <td>
                          <a class="btn btn-success btn-sm" href="/product/edit/{{ $listproduct->product_id }}">Edit</a>
                          <a class="btn btn-warning btn-sm" href="/product/detail/{{ $listproduct->product_id }}">Detail</a>
                          <a class="btn btn-danger btn-sm" href="/product/delete/{{ $listproduct->product_id }}">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </section>
    </div>
@endsection