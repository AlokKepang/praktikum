@extends('admin.layouts.app')

@section('title', 'Wisata Management')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Wisata Management</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New Wisata
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        
        <!-- Japan Card -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <img class="card-img-top" src="https://awsimages.detik.net.id/community/media/visual/2022/09/13/lanskap-gunung-fuji-yang-indahnya-engga-ada-obat-1_169.jpeg?w=600&q=90" alt="Japan">
                <div class="card-body">
                    <h5 class="card-title">Japan</h5>
                    <p class="card-text">In publishing and graphic design, Lorem ipsum is a common placeholder text used to demonstrate the visual form of a document.</p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Switzerland Card -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <img class="card-img-top" src="https://static.toiimg.com/thumb/msid-96203700,width-748,height-499,resizemode=4,imgsize-239734/.jpg" alt="Switzerland">
                <div class="card-body">
                    <h5 class="card-title">Switzerland</h5>
                    <p class="card-text">In publishing and graphic design, Lorem ipsum is a common placeholder text used to demonstrate the visual form of a document.</p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bali Card -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <img class="card-img-top" src="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-indonesia.webp" alt="Bali">
                <div class="card-body">
                    <h5 class="card-title">Bali</h5>
                    <p class="card-text">In publishing and graphic design, Lorem ipsum is a common placeholder text used to demonstrate the visual form of a document.</p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection