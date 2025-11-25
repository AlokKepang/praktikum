@extends('admin.layouts.app')

@section('title', 'Users Management')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users Management</h1>
    <p class="mb-4">Manage all registered users in the system.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin User</td>
                            <td>admin@example.com</td>
                            <td><span class="badge badge-primary">Admin</span></td>
                            <td>2024-01-15</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sendi Putra</td>
                            <td>sendi@example.com</td>
                            <td><span class="badge badge-success">User</span></td>
                            <td>2024-01-20</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection