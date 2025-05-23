@extends('layouts.app')

@section('title', 'Berita Desa')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Berita Desa</h1>
    
    <div class="row">
        @for($i = 1; $i <= 6; $i++)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Berita {{ $i }}">
                <div class="card-body">
                    <h5 class="card-title">Judul Berita {{ $i }}</h5>
                    <p class="card-text">Deskripsi singkat berita {{ $i }}. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
                <div class="card-footer text-muted">
                    Diposting pada {{ date('d M Y') }}
                </div>
            </div>
        </div>
        @endfor
    </div>
    
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection