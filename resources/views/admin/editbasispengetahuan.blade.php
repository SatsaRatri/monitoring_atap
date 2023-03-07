@extends('admin.partials.master')
@section('content')
    <main>
        <!-- Main page content-->
        <form action="{{ route('basispengetahuan.update', $basis->id) }}" method="post" enctype="multipart/form-data">
            <div class="container-xl px-4 mt-4">
                <!-- Knowledge base home header option-->
                <div class="row my-5">
                    {!! csrf_field() !!}
                    {!! method_field('PUT') !!}
                    <div class="card">
                        <div class="card-header font-weight-bold text-primary">
                            Edit Data
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="">Judul</label>
                                <input class="form-control w-50" id="inputJudul" type="text" placeholder="Enter your judul" name="judul" value="{{ $basis->judul }}">
                            </div>
                            <div class="mb-4">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" style="height: 10rem;" id="inputUsername" type="text">{{ $basis->deskripsi }}</textarea>
                            </div>
                            <div>
                                <label for="">Pilih Foto</label><br>
                                <img class="img-fluid w-50" src="{{ asset($basis->path_gambar) }}" alt="..."><br>
                                <input type="file" class="mt-3" name="gambar" id="gambar">
                            </div>
                            <button class="btn btn-primary mt-5" type="submit" style="float: right">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </main>
@endsection
