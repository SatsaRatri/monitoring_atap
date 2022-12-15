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
                        <h1 class="text-primary">How can we help?</h1>
                        <p class="lead mb-4">Search our knowledge base to find answers, or contact us directly if you're
                            having issues!</p>
                    </div>
                    <div class="col-lg-4"><img class="img-fluid" src="{{ asset('template/img/problem-solving.svg') }}">
                    </div>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="card-header py-10">
                <h4 class="mb-12 mt-3">Basis Pengetahuan
                    <a href="{{ route('basispengetahuan.create') }}" class="btn btn-info btn-circle">
                        <i class="fas fa-plus"></i>
                    </a>
                </h4>
            </div>
        </div>
        <div class="row">
            @foreach ($basis as $item)
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
            @endforeach
        </div>

    </div>

</main>
@endsection