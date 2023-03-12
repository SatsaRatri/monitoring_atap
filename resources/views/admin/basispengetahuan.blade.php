@extends('admin.partials.master')
@section('content')
<main>
    <!-- Main page content-->
    <div class="container-xl px-6 mt-6">
        <!-- Knowledge base home header option-->
        <header class="card card-waves">
            <div class="card-body col-md">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-8">
                        <h1 class="text-primary">Apa itu Basis Pengetahuan? </h1>
                        <p class="lead mb-4 justify-content-between">Istilah basis pengetahuan mengacu pada perpustakaan data di mana informasi dikumpulkan, diatur, dibagikan, dicari, dan digunakan. Basis pengetahuan dimaksudkan untuk bertindak sebagai sumber daya bagi pembaca. Basis pengetahuan disini berfungsi mengetahui apa saja alat yang digunakan dalam peneltian ini.</p>
                    </div>
                    <div class="col-lg-3"><img class="img-fluid" src="{{ asset('template/img/problem-solving.svg') }}">
                    </div>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="card-header border-0">
                <h4 class="mb-12 mt-3">Basis Pengetahuan
                    <a href="{{ route('basispengetahuan.create') }}" class="btn btn-info btn-circle">
                        <i class="fas fa-plus"></i>
                    </a>
                </h4>
            </div>
        </div>
        {{-- <div class="row">
            <div class="card shadow col-md-6 ">
                <div class="card-header py-3">
                    <div class="d-flex flex-row align-items-center ">
                        <h6 class="m- font-weight-bold text-primary">{{ $item->judul }} </h6>
                        <a href="{{ route('basispengetahuan.edit', $item->id) }}"
                            class="btn btn-warning btn-circle ml-auto">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('basispengetahuan.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-circle ml-auto">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-2 mt-2 mb-2" style="width: 25rem;"
                            src="{{ asset($item->path_gambar) }}" alt="...">
                    </div>
                    <p>{{ $item->deskripsi }}</p>

                </div>
            </div>
        </div> --}}
        <div class="row">
            @foreach ($basis as $item)
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $item->judul }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-2 mt-2 mb-2" style="width: 25rem;"
                                src="{{ asset($item->path_gambar) }}" alt="...">
                        </div>
                        <br>
                        <p class="card-text p-2">{{ $item->deskripsi }}</p>
                    </div>
                    <div class="card-footer text-muted d-flex">
                        <a href="{{ route('basispengetahuan.edit', $item->id) }}"
                            class="btn btn-warning btn-circle ml-auto mx-2">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('basispengetahuan.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-circle ml-auto">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</main>
@endsection