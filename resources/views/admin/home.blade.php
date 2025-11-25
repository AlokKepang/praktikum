@extends('admin.layouts.app')

@section('title', 'Home Page Management')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home Page Management</h1>
        <a href="/" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
            <i class="fas fa-eye fa-sm text-white-50"></i> Preview Homepage
        </a>
    </div>

    <!-- Hero Section Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Hero Section</h6>
            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editHeroModal">
                <i class="fas fa-edit"></i> Edit
            </button>
        </div>
        <div class="card-body">
            <div class="hero-preview p-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 10px; color: white;">
                <h2 class="text-center mb-3">Selamat Datang bolo Di keluarga Talon</h2>
                <p class="text-center"><b>Note:</b> ini adalah praktikum pertama</p>
                <p class="text-center">Alo semuanya</p>
            </div>
        </div>
    </div>

    <!-- Gallery Section Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Gallery Section</h6>
            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editGalleryModal">
                <i class="fas fa-edit"></i> Edit
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-success font-weight-bold">TALON HEBAT</h5>
                    <p>Jika anda mencari Tempat wisata yang indah dan menakjubkan, maka Website Talon adalah pilihan yang tepat untuk anda. Talon menawarkan berbagai destinasi wisata yang memukau dan pengalaman tak terlupakan.</p>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Gallery images can be managed in the Media Library
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Links Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Quick Links Section</h6>
            <button class="btn btn-sm btn-primary">
                <i class="fas fa-plus"></i> Add Link
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Link Text</th>
                            <th>Link URL</th>
                            <th>Order</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lihat Section 1</td>
                            <td>#section1</td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Lihat Galeri</td>
                            <td>#galeri</td>
                            <td>2</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SEO Settings Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">SEO Settings</h6>
            <button class="btn btn-sm btn-primary">
                <i class="fas fa-save"></i> Save
            </button>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Page Title</label>
                    <input type="text" class="form-control" value="Home - Talon">
                </div>
                <div class="form-group">
                    <label>Meta Description</label>
                    <textarea class="form-control" rows="3">Website Talon menawarkan berbagai destinasi wisata yang memukau</textarea>
                </div>
                <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text" class="form-control" value="wisata, travel, talon, tourism">
                </div>
            </form>
        </div>
    </div>

@endsection