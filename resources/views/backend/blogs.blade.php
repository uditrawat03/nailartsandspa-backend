@extends('layouts.admin')
@section('navigation')
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="{{route('admin.admin-dashboard')}}" class="nav-link">Dashboard</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Blogs</a>
  </li>
</ul>
@endsection    
@section('breadcrumb')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blogs</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<section class="content">  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Blog List  </h3>            
              <div class="float-right">             
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-primary btn-sm ">Add Blog</a>
              </div>            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th style="width: 40px">Action</th>
                </tr>
              </thead>
              <tbody>
                @php($i = 1)
                @foreach($blogs as $blog)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $blog->title }}</td>
                  <td>{{ $blog->description }}</td>
                  <td><a href="{{ route('admin.blogs.edit', $blog->id) }}"><i class="fas fa-edit btn-info"></i></a> <a href=""><i class="fas fa-trash-alt btn-danger"></i></a></td>
                </tr>
                @php($i++)
                @endforeach                
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <div class="float-right">
            {!!  $blogs->links() !!}
            </div>          
          </div>
        </div>        
      </div>      
    </div>    
  </div>
</section>
@endsection