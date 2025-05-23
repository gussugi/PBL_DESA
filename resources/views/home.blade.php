@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Desa Kita">
                <div class="card-body">
                    <h2 class="card-title">Selamat Datang di Website Desa Kita</h2>
                    <p class="card-text">Desa Kita adalah desa yang indah dengan masyarakat yang ramah dan berbudaya.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5>Informasi Terkini</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pengumuman 1</li>
                        <li class="list-group-item">Pengumuman 2</li>
                        <li class="list-group-item">Pengumuman 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection