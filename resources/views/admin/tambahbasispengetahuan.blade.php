@extends('admin.partials.master')
@section('content')
    <main>
        <!-- Main page content-->
        <form action="{{ route('basispengetahuan.store') }}" method="post" enctype="multipart/form-data">
            <div class="container-xl px-4 mt-4">
                <!-- Knowledge base home header option-->
                <div class="row">

                    {!! csrf_field() !!}
                    <div class="card shadow col-md py-12">
                        <div class="card-header px-4 py-4">
                            <div class="d-flex flex-row align-items-center ">
                                <h6 class="m-0 font-weight-bold text-primary pl-10 px-3">Judul </h6>
                                <input class="form-control col-4" id="inputJudul" type="text"
                                    placeholder="Enter your judul" name="judul">
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="d-flex flex-row">

                                <div class="col-xl-5">
                                    <!-- Profile picture card-->
                                    <div class="card mb-6  align-items-center" style="height: 20rem;">
                                        <div class="card-header">Profile Picture</div>
                                        <div class="card-body text-center mx-5 my-5">
                                            <!-- Profile picture image-->
                                            <img class="img-account-profile rounded-circle mb-2"
                                                src="assets/img/illustrations/profiles/profile-1.png" alt="">
                                            <!-- Profile picture help block-->
                                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB
                                            </div>
                                            <!-- Profile picture upload button-->
                                            {{-- <button class="btn btn-primary mx-3 my-3" type="button">Upload new
                                                image</button> --}}
                                            <input type="file" class="btn btn-primary " name="gambar" id="gambar">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Group (deskripsi)-->
                                <div class="col-xl-7 ">
                                    <!-- Profile picture card-->
                                    <div class="card mb-6  align-items-center border-0" style="height: 20rem;">
                                        <div class="card-header">Deskripsi</div>
                                        <textarea class="form-control mx-3 my-2 col-50" name="deskripsi" style="height: 20rem; wid" id="inputUsername"
                                            type="text"></textarea>

                                    </div>
                                    <button class="btn btn-primary" type="submit" style="float: right">Save
                                        changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </main>
@endsection
