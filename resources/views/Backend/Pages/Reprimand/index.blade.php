@extends('backend.Layouts.template')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Teguran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Surat Teguran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No</th>
                                <th>Nama Pelanggar</th>
                                <th>Foto Pelanggar</th>
                                <th>Identitas Pelanggar</th>
                                <th>Foto Identitas</th>
                                <th>No Identitas Pelanggar</th>
                                <th>Nomor Telepon Pelanggar</th>
                                <th>No Surat</th>
                                <th>Petugas</th>
                                <th>Tanda Tangan</th>
                                <th>Pelanggaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                @php
                                    $detail = DB::table('reprimands_penalties')
                                        ->join('penalties', 'penalties.id', 'reprimands_penalties.penalty_id')
                                        ->select('penalties.*')
                                        ->where('reprimands_id', $item->id)
                                        ->get();
                                @endphp
                                <tr>
                                    <td></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <img src="{{ url('image/pelanggar') . '/' . $item->image }}" alt=""
                                            width="150px">
                                    </td>
                                    <td>{{ strtoupper($item->identity) }}</td>
                                    <td><img src="{{ url('image/identitas-pelanggar') . '/' . $item->image_identity }}"
                                            width="150px"></td>
                                    <td>{{ $item->identity_number }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->number_reprimand }}</td>
                                    <td>{{ $item->officer->name }}</td>
                                    <td><img src="{{ url('image/signature') . '/' . $item->signature }}" alt=""
                                            width="150px"></td>
                                    <td>
                                        @foreach ($detail as $itemd)
                                            <li>
                                                <span for="penalty1">{{ $itemd->title }}</span>
                                                {!! $itemd->content !!}
                                            </li>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
