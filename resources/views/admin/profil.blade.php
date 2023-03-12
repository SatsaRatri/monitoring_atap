@extends('admin.partials.master')
@section('content')
    <main>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <h1 class=" h3 mb-0 text-gray-800 nav-link active mes-0" href="{{ route('profil') }}">Profil</h1>

            </nav>
            <hr class="mt-0 mb-4">
            <form action="{{ route('profil.update') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method('PUT')
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Gambar Profil</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ asset($user->profile_photo_path ? $user->profile_photo_path : 'template/img/undraw_profile.svg') }}"
                                    alt="" style="height: 250px; width: 250px">
                                <!-- Profile picture help block-->
                                <p class="mt-2"><span style="color:red">*</span><small> JPG or PNG no larger than 5 MB</small></p>
                                {{-- <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> --}}
                                <!-- Profile picture upload button-->
                                <input type="file" class="" style="width: 15rem;" name="avatar" id="avatar">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8" >
                        <!-- Account details card-->
                        <div class="card mb-4 "style="height: 27rem;">
                            <div class="card-header">Detail Akun</div>
                            <div class="card-body">
                                <form>
                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputName">Nama</label>
                                        <input class="form-control" id="inputName" name="name" type="text"
                                            placeholder="Enter your username" value="{{ $user->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmail">Email</label>
                                        <input class="form-control" id="inputEmail" name="email" type="email"
                                            placeholder="Enter your username" value="{{ $user->email }}" disabled style="background-color: white">
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control" id="inputPassword" name="password" type="password"
                                            placeholder="Enter your password" value="">
                                    </div>
                                    <!-- Form Row    -->

                                    <!-- Save changes button-->
                                    <button class="btn btn-primary mt-5" style="float: right" type="submit">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
