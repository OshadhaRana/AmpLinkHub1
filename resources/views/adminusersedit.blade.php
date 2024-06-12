





@extends('admindashlayout')
@section('title', 'View Users')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div class="card-body">


                                        <div class="card-body">
                                            <div class="d-sm-flex justify-content-between align-items-start">
                                                <a href="{{url('viewusertoadmin')}}" class="no-underline">
                                                    <i class="ri-arrow-left-line"></i> Back
                                                </a>
                                                <div>
                                                    <h4 class="card-title card-title-dash">Edit User</h4>
                                                </div>
                                                <div>
                                                    <a href="{{ url('createuser') }}" class="btn btn-primary btn-lg text-white mb-0 me-0">
                                                        <i class="mdi mdi-account-plus"></i> Add new member
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="table-responsive  mt-1">

                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                                    </div>

                                                    <!-- Add more fields as necessary -->

                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>

                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="mt-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete User</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


