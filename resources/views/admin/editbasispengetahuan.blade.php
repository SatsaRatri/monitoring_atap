@extends('admin.partials.master')
@section('content')
    <main>
        <!-- Main page content-->
        <div class="container-xl p-auto">
            <form action="{{ route('basispengetahuan.update', $basis->id) }}" method="post" enctype="multipart/form-data">
                <!-- Knowledge base home header option-->
                <div class="row mb-3">
                    {!! csrf_field() !!}
                    {!! method_field('PUT') !!}
                    <div class="card w-100">
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
                                <img class="img-fluid w-50" src="{{ asset($basis->path_gambar) }}" alt="..." id="blah"><br>
                                <input type="file" class="mt-3" name="gambar" id="gambar" onchange="readURL(this);">
                            </div>
                            <button class="btn btn-primary mt-5" type="submit" style="float: right">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </main>
@endsection
@push('extraJS')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush