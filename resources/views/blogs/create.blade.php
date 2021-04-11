@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Blog') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" aria-describedby="titleHelp"
                                placeholder="Enter title" required name="title">
                            <small id="titleHelp" class="form-text text-muted">Max 200 character</small>
                        </div>
                        <div class="form-group">
                            <label for="description">Body</label>
                            <textarea class="form-control" id="description" placeholder="Description" required
                                name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">

                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="active" checked name="active">
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection