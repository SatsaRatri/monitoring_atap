@extends('admin.partials.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Tabel</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-8">
            <div class="card-header py-12">
                <div class="d-flex flex-row align-items-center ">
                    <h5 class="font-weight-bold text-primary mt-2">Data Tabel</h5>
                    {{-- <button class="fas fa-calendar-alt fa text-gray-700 border-0 ml-auto"></button>
                    <form action="{{ route('datasensor.tabel') }}" method="get">
                        <input type="date" name="tanggal" id="tanggal"
                            value="{{ request()->get('tanggal') ? request()->get('tanggal') : '' }}">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form> --}}
                </div>
            </div>
            <div class="d-flex">
                <div class="card-body">
                    <div class="me-auto">
                        <div class="md-form md-outline input-with-post-icon datepicker">
                            <label for="example">Tanggal</label>
                            <form action="{{ route('datasensor.tabel') }}" method="get">
                                <div class="d-flex flex-row">
                                    <div class="w-50">
                                        <input placeholder="Select date" type="date" name="tanggal" id="tanggal" class="form-control" value="{{ request()->get('tanggal') ? request()->get('tanggal') : '' }}">
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary mx-2 border-0">Cari</button>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary border-0" style="background-color: #54B435;">Export</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Suhu</th>
                                <th>Cahaya</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->suhu }}</td>
                                    <td>{{ $item->cahaya }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
