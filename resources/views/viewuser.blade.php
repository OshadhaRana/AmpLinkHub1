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
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <a href="{{url('viewusertoadmin')}}" class="no-underline">
                                                <i class="ri-arrow-left-line"></i> Back
                                            </a>
                                            <div>
                                                <h4 class="card-title card-title-dash">All Admin Users</h4>
                                            </div>
                                            <div>
                                                <a href="{{ url('createuser') }}" class="btn btn-primary btn-lg text-white mb-0 me-0">
                                                    <i class="mdi mdi-account-plus"></i> Add new member
                                                </a>
                                            </div>
                                        </div>
                                        <div class="table-responsive  mt-1">
                                            <table class="table select-table">
                                                <thead>
                                                <tr>


                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Actions</th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($adminUsers as $user)
                                                    <tr>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
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


