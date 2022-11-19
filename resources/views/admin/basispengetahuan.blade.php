@extends('admin.partials.master')
@section('content')
<main>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">
        <!-- Knowledge base home header option-->
        <header class="card card-waves">
            <div class="card-body col-md">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <h1 class="text-primary">How can we help?</h1>
                        <p class="lead mb-4">Search our knowledge base to find answers, or contact us directly if you're
                            having issues!</p>
                        <div class="shadow rounded">
                            <div class="input-group input-group-joined input-group-joined-xl border-0">
                                <input class="form-control me-0" type="text" placeholder="Search..." aria-label="Search"
                                    autofocus="">
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"><img class="img-fluid" src="{{ asset('template/img/problem-solving.svg') }}">
                    </div>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="card-header py-12">
                <h4 class="mb-12 mt-5">Basis Pengetahuan
                    <a href="{{ route('basispengetahuan.create') }}" class="btn btn-info btn-circle">
                        <i class="fas fa-plus"></i>
                    </a>
                </h4>
            </div>
        </div>
        <div class="row">
            @foreach ($basis as $item)
            <div class="card shadow col-md-6">
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
            @endforeach
        </div>

    </div>

</main>
@endsection