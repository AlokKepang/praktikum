@extends('admin.layouts.app')

@section('title', 'Wisata Management')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Wisata Management</h1>
        <a href="{{ route('admin.wisata.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New Wisata
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Destinasi Wisata</h6>
            <span class="badge badge-info">Total: {{ $wisata->total() }} destinasi</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Gambar</th>
                            <th width="20%">Nama Wisata</th>
                            <th width="40%">Deskripsi</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($wisata as $index => $item)
                        <tr>
                            <td>{{ $wisata->firstItem() + $index }}</td>
                            <td>
                                @if($item->gambar)
                                    <img src="{{ asset($item->gambar) }}" alt="{{ $item->nama_wisata }}" 
                                         style="width: 100px; height: 70px; object-fit: cover; border-radius: 5px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $item->nama_wisata }}</td>
                            <td>{{ Str::limit($item->deskripsi, 100) }}</td>
                            <td>
                                <a href="{{ route('admin.wisata.edit', $item->id) }}" class="btn btn-sm btn-info mb-1">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.wisata.delete', $item->id) }}" method="POST" class="d-inline" 
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus destinasi ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mb-1">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                <div class="py-4">
                                    <i class="fas fa-map-marked-alt fa-3x text-muted mb-3"></i>
                                    <p class="text-muted mb-0">Belum ada data destinasi wisata</p>
                                    <a href="{{ route('admin.wisata.create') }}" class="btn btn-primary btn-sm mt-2">
                                        <i class="fas fa-plus"></i> Tambah Destinasi Pertama
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($wisata->hasPages())
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="text-muted small">
                    Menampilkan {{ $wisata->firstItem() }} sampai {{ $wisata->lastItem() }} dari {{ $wisata->total() }} data
                </div>
                <div>
                    {{ $wisata->links('pagination::bootstrap-4') }}
                </div>
            </div>
            @endif
        </div>
    </div>

@endsection

@section('scripts')
<style>
    /* Custom Pagination Style */
    .pagination {
        margin-bottom: 0;
    }
    
    .page-link {
        color: #4e73df;
        border-color: #dddfeb;
    }
    
    .page-link:hover {
        color: #224abe;
        background-color: #eaecf4;
        border-color: #dddfeb;
    }
    
    .page-item.active .page-link {
        background-color: #4e73df;
        border-color: #4e73df;
    }
    
    .page-item.disabled .page-link {
        color: #858796;
        background-color: #fff;
        border-color: #dddfeb;
    }
</style>
@endsection