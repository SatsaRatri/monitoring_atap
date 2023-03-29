@extends('admin.partials.master')
@section('content')
    <main>
        <!-- Main page content-->
        <div class="container-xl px-6 mt-6">
            <!-- Knowledge base home header option-->
            <header class="card card-waves">
                <div class="card-body col-md">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-9">
                            <h1 class="text-primary">Apa itu Analisis Preventive Maintenance?</h1>
                            <p class="lead mb-4">Tindakan preventive maintenance agar dapat meningkatkan kinerja dari perusahaan, untuk meminimalisir terjadinya breakdown dan downtime maka perlu adanya sistem penjadwalan perawatan yang baik guna mencegah terjadinya kerusakan mesin. Salah satu metode sebagai acuan untuk menetapkan jadwal perawatan yang efektif, yaitu :</p>
                            <h4 class="text-primary lead mb-3">1. ANALISIS MEAN TIME TO REPAIR (MTTR)</h4>
                            <h6 class="lead mb-4">Mean time to repair (MTTR) adalah jumlah rata-rata waktu yang diperlukan untuk memperbaiki sistem dan mengembalikannya ke fungsionalitas penuh. </h6>
                            <h4 class="text-primary lead mb-3">2. MEAN TIME BETWEEN FAILURE (MTBF)</h4>
                            <h6 class="lead mb-4">Waktu rata-rata antara kegagalan (MTBF) adalah waktu rata-rata yang dilalui antara kegagalan perangkat keras yang dapat diperbaiki dan waktu berikutnya terjadi. Ketersediaan dan keandalan alat ukur MTBF, sehingga semakin tinggi jumlah MTBF, semakin andal sistemnya.</h6>
                        </div>
                        <div class="col-lg-3"><img class="img-fluid" src="{{ asset('template/img/problem-solving.svg') }}">
                        </div>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="card-body col-md mt-3">
                    <form action="{{ route('analisis') }}" method="get">
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="md-form md-outline input-with-post-icon datepicker">
                                    <label for="">Tanggal Mulai</label>
                                    <input placeholder="Select date" type="date" name="tgl_awal" id="example"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="md-form md-outline input-with-post-icon datepicker">
                                    <label for="">Tanggal Akhir</label>
                                    <input placeholder="Select date" type="date" name="tgl_akhir" id="example"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="" class="mt-3"></label><br>
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                            {{-- <div class="col-4">
                        <div class="md-form md-outline input-with-post-icon datepicker">
                            <label for="">Tanggal Mulai</label>
                            <input placeholder="Select date" type="date" id="example" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="md-form md-outline input-with-post-icon datepicker">
                            <label for="">Tanggal Akhir</label>
                            <input placeholder="Select date" type="date" id="example" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div> --}}
                        </div>
                    </form>

                </div>
                <div class="card-body col-md">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-3">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1"
                                        style="text-align:center">Analisis Mean Time To Repair (MTTR)</div>
                                    <div class="mb-3">
                                        <input class="form-control" id="inputnilai" name="nilai" type="text"
                                            placeholder="Hasil MTTR" value="{{ $mttr }} Menit" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body col-md">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-3">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1"
                                        style="text-align:center">Mean Time Between Failure (MTBF)</div>
                                    <div class="mb-3">
                                        <input class="form-control  col-md-15" id="inputnilai" name="nilai" type="text"
                                            placeholder="Hasil MTBF"
                                            value="{{ //bulatkan ke bawah
                                                floor($mtbf) }} Menit"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
@endsection
