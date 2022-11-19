@extends('admin.partials.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-8">
            <div class="card-header py-12">
                <div class="d-flex flex-row align-items-center ">
                    <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
                    <button class="fas fa-calendar-alt fa-2x text-gray-700 border-0 ml-auto"></button>
                    <form action="{{ route('datasensor.tabel') }}" method="get">
                        <input type="date" name="tanggal" id="tanggal"
                            value="{{ request()->get('tanggal') ? request()->get('tanggal') : '' }}">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
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
