@extends('layouts.app')

@section('title', 'Informasi Desa')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Informasi Desa</h1>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-info text-white">
                    <h5>Profil Desa</h5>
                </div>
                <div class="card-body">
                    <p>Desa Kita adalah desa yang terletak di kecamatan yang subur dengan mayoritas penduduk bekerja sebagai petani dan pengrajin. Desa ini memiliki banyak potensi baik dari segi pertanian, kerajinan tangan, maupun wisata alam.</p>
                    <ul>
                        <li>Luas Wilayah: 500 Ha</li>
                        <li>Jumlah Penduduk: 2.500 Jiwa</li>
                        <li>Jumlah RT: 15</li>
                        <li>Jumlah RW: 5</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-info text-white">
                    <h5>Struktur Pemerintahan</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Kepala Desa:</strong> John Doe</li>
                        <li class="list-group-item"><strong>Sekretaris Desa:</strong> Jane Smith</li>
                        <li class="list-group-item"><strong>Bendahara:</strong> Michael Johnson</li>
                        <li class="list-group-item"><strong>Kasi Pemerintahan:</strong> Sarah Williams</li>
                        <li class="list-group-item"><strong>Kasi Kesejahteraan:</strong> David Brown</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5>Visi dan Misi Desa</h5>
                </div>
                <div class="card-body">
                    <h6>Visi:</h6>
                    <p>"Mewujudkan Desa Kita yang mandiri, sejahtera, dan berbudaya melalui pemberdayaan masyarakat berbasis potensi lokal."</p>
                    
                    <h6 class="mt-3">Misi:</h6>
                    <ol>
                        <li>Meningkatkan kualitas sumber daya manusia</li>
                        <li>Mengembangkan potensi ekonomi lokal</li>
                        <li>Memperkuat infrastruktur desa</li>
                        <li>Melestarikan budaya dan kearifan lokal</li>
                        <li>Meningkatkan pelayanan publik</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection