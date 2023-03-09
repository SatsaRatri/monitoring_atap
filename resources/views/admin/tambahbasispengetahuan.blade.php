@extends('admin.partials.master')
@section('content')
    <main>
        <!-- Main page content-->
        <form action="{{ route('basispengetahuan.store') }}" method="post" enctype="multipart/form-data">
            <div class="container-xl px-4 mt-4">
                <!-- Knowledge base home header option-->
                <div class="row my-5">

                    {!! csrf_field() !!}
                    <div class="card w-100">
                        <div class="card-header font-weight-bold text-primary">
                            Tambah Data
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="">Judul</label>
                                <input class="form-control w-50" id="inputJudul" type="text" placeholder="Masukkan judul" name="judul">
                            </div>
                            <div class="mb-4">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" style="height: 10rem" id="inputUsername" type="text"></textarea>
                            </div>
                            <div>
                                <label for="">Pilih Foto</label><br>
                                <img class="img-account-profile rounded-circle mb-2 mt-3" src="{{ asset('template/img/undraw_profile.svg') }}" alt="" style="height: 250px; width: 250px" id="blah">
                                {{-- <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt=""> --}}
                                <p class="mt-2 mx-4"><span style="color:red">*</span><small> JPG or PNG no larger than 5 MB</small></p>
                                <input type="file" class="mx-4" name="gambar" id="gambar" onchange="readURL(this);">
                            </div>
                            <button class="btn btn-primary mt-5" type="submit" style="float: right">Save Changes</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

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