@extends('admin.partials.master')
@section('content')
<main>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">
        <!-- Knowledge base home header option-->
        <div class="row">
            <div class="card shadow col-md">
                <div class="card-header py-3">
                    <div class="d-flex flex-row align-items-center ">
                    <h6 class="m-0 font-weight-bold text-primary pl-10">Judul </h6>
                    <input class="form-control col-4" id="inputJudul" type="text" placeholder="Enter your judul">
                </div>
                </div>
                
                <div class="card-body">
                    <div class="col-xl-4  justify-content-center " >
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0 align-items-center " >
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center" >
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary" type="button">Upload new image</button>
                            </div>
                        </div>
                    </div>
                    <!-- Form Group (deskripsi)-->
                    
                    <div class="row mb-4">
                        <h6 class="m-4 font-weight-bold text-primary">Deskripsi</h6>
                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                    </div>
                    <button class="btn btn-primary" type="button" style="float: right">Save changes</button>
                </div>
            </div>
        </div>
        
    </div>
    
</main>
@endsection