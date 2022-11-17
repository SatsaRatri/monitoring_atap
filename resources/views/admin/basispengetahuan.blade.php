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
                        <p class="lead mb-4">Search our knowledge base to find answers, or contact us directly if you're having issues!</p>
                        <div class="shadow rounded">
                            <div class="input-group input-group-joined input-group-joined-xl border-0">
                                <input class="form-control me-0" type="text" placeholder="Search..." aria-label="Search" autofocus="">
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"><img class="img-fluid" src="{{asset('template/img/problem-solving.svg')}}"></div>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="card-header py-12">
        <h4 class="mb-12 mt-5">Basis Pengetahuan
            <a href="#" class="btn btn-info btn-circle">
                <i class="fas fa-plus"></i>
            </a>
        </h4>
            </div>
        </div>
        <div class="row">
            <div class="card shadow col-md-6 my-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations
                    <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('template/img/undraw_posting_photo.svg')}}" alt="...">
                    </div>
                    <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                        constantly updated collection of beautiful svg images that you can use
                        completely free and without attribution!</p>
                    
                </div>
            </div>
        </div>
        
    </div>
    
</main>
@endsection