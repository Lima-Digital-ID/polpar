@extends('Frontend.Layouts.template')
@push('custom-css')
    <style>
        .text-capitalize {
            text-transform: uppercase !important;
        }

        li:not(:last-child) {
            margin-bottom: 20px;
        }

        .signature-pad {
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            height: 260px;
        }

        .pelanggarName {
            position: absolute;
            text-align: center !important;
            top: 200px;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 1rem 0.75rem;
            overflow: hidden;
            text-align: start;
            text-overflow: ellipsis;
            white-space: nowrap;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
        }
    </style>

    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
@endpush
@section('content')
    <div class="col-md-offset-2 mg-b-40">
        <form action="{{ url('assignment') }}" id="submitForm" method="POST" enctype="multipart/form-data">
            @csrf
            @php
                $date_now = \Carbon\Carbon::now()->format('Y-m-d');
            @endphp
            <div class="row">
                <div class="col-12">
                    <center>
                        <img src="{{ asset('/img/logo_polisi.png') }}" alt="" width="150px">
                        <h4 class="text-center text-capitalize">Kepolisian Negara Republik Indonesia</h4>
                        <h4 class="text-center text-capitalize">Daerah Jawa Timur</h4>
                        <h4 class="text-center text-capitalize">Resor Bondowoso</h4>
                    </center>
                </div>
                <div class="col-12">
                    <h2 class="text-center text-capitalize">Surat Tugas</h2>
                </div>
                <div class="col-6 mt-3">
                    <div class="form-group">
                        <label for="">No Surat</label>
                        <input type="text" class="form-control" name="no_surat" placeholder="No Surat"
                            value="{{ $no_surat }}" readonly>
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div class="form-group">
                        <label for="">Tanggal Surat Dibuat</label>
                        <input type="date" class="form-control" name="date" placeholder="Tanggal Surat Dibuat"
                            value="{{ $date_now }}">
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div class="form-group">
                        <label for="">Tanggal Mulai Patroli</label>
                        <input type="date" class="form-control" name="date_start" placeholder="Tanggal Mulai Patroli"
                            value="{{ $date_now }}">
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div class="form-group">
                        <label for="">Tanggal Selesai Patroli</label>
                        <input type="date" class="form-control" name="date_end" placeholder="Tanggal Selesai Patroli"
                            value="{{ $date_now }}">
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="" cols="30" rows="10" placeholder="Keterangan">
                    </textarea>
                    </div>
                </div>
                <h4 class="mt-4">Petugas</h4>
                @forelse ($officers as $item)
                    <div class="col-3 mt-3">
                        <div class="form-group">
                            <label for="">{{ $item->name }}</label>
                            <input type="checkbox" name="officer[]" value="{{ $item->id }}">
                        </div>
                    </div>
                @empty
                    <h4>Tidak ada data</h4>
                @endforelse
            </div>
            <div class="col-12 mt-5">
                <button type="submit" class="btn btn-primary" id="saveForm"><i class="fas fa-save"></i>
                    Simpan</button>
                <button type="reset" class="btn btn-secondary text-white"><i class="fas fa-refresh"></i>
                    Reset</button>
            </div>
    </div>
    </form>
    </div>
@endsection
@push('custom-script')

    <script>
        function submit() {
            const signature = $("#signature").val();
            console.log(signature);
            if (signature == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal !',
                    text: 'Tanda Tangan Anda Kosong! Silahkan tanda tangan terlebih dahulu.',
                })
            } else {
                $('#submitForm').submit();
            }
        }

        function pelanggar() {
            var name = $('#name').val();
            $('.pelanggarName').html(name);
        }
    </script>
    @if (session('message'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses !',
                text: 'Berhasil Menambah Data',
            })
        </script>
    @endif
@endpush
