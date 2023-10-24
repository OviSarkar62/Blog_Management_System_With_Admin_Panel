@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User List</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Edit User</h3>
                                <a href="{{ route('user.index') }}" class="btn btn-primary">Go Back to User List</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        @include('includes.errors')

                                        <div class="form-group">
                                            <label for="name">User Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter name" value="{{ $user->name }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">User Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Enter email" value="{{ $user->email }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">User Password (leave blank to keep current password)</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Enter password">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">User Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image"
                                                    id="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">User Description</label>
                                            <textarea name="description" id="description" rows="5" class="form-control"
                                                placeholder="Write your profile description">{{ $user->description }}</textarea>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Update User</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
