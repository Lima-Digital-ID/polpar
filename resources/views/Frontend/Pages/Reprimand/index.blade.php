@extends('Frontend.Layouts.template')
@push('custom-css')
    <style>
        .text-capitalize {
            text-transform: uppercase !important;
        }

        li:not(:last-child) {
            margin-bottom: 20px;
        }

        /* .kbw-signature {
                                                                                                                        width: 100%;
                                                                                                                        height: 200px;
                                                                                                                    }

                                                                                                                    #sig canvas {
                                                                                                                        width: 100% !important;
                                                                                                                        height: auto;
                                                                                                                    } */
        .signature-pad {
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            height: 260px;
        }
    </style>

    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
@endpush
@section('content')
    <div class="col-md-offset-2 mg-b-40">
        <form action="{{ url('reprimand') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                    <h2 class="text-center text-capitalize">Surat Teguran</h2>
                </div>

                <div class="col-6 col-md-6">

                    <div class="mb-3">
                        <label for="myFileInput">Foto Pelanggar</label>
                        <input id="myFileInput" type="file" accept="image/*,capture=camera" name="photo"
                            class="form-control @error('photo')
                                is-invalid
                            @enderror">
                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="mb-3">

                        <img id="preview-image-before-upload" alt="" style="max-height: 150px;">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text"
                            placeholder="Enter your name..." name="name" />
                        <label for="name">Nama Pelanggar</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-floating mb-3">
                        <select id="identity" class="form-control @error('identity') is-invalid @enderror"
                            style="width: 100%" name="identity">
                            <option value="" selected disabled>Pilih Jenis Identitas</option>
                            <option value="sim">SIM</option>
                            <option value="ktp">KTP</option>
                        </select>
                        <label for="identity">Identitas</label>
                        @error('identity')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-floating mb-3">
                        <input class="form-control @error('identityNumber') is-invalid @enderror" id="identityNumber"
                            type="number" placeholder="Enter your name..." name="identityNumber" />
                        <label for="identityNumber">No Identitas</label>
                        @error('identityNumber')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="number"
                            placeholder="Enter your name..." name="phone" />
                        <label for="phone">No Whatsapp</label>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <ol>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="1">
                                <span for="penalty1">Pasal 378 KUHP menerangkan bahwa yang dimaksud dengan penipuan adalah
                                    kondisi
                                    yang dilakukan oleh siapa pun dengan maksud untuk menguntungkan diri sendiri atau orang
                                    lain
                                    secara melawan hukum, dengan memakai nama palsu atau martabat palsu, dengan tipu
                                    muslihat,
                                    atau
                                    pun rangkaian kebohongan, menggerakkan orang lain untuk menyerahkan barang sesuatu
                                    kepadanya,
                                    atau supaya memberi hutang maupun menghapuskan piutang, diancam karena penipuan dengan
                                    pidana
                                    penjara paling lama empat tahun.</span>
                            </li>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="2">
                                <span for="penalty2">Pasal 378 KUHP menerangkan bahwa yang dimaksud dengan penipuan adalah
                                    kondisi
                                    yang dilakukan oleh siapa pun dengan maksud untuk menguntungkan diri sendiri atau orang
                                    lain
                                    secara melawan hukum, dengan memakai nama palsu atau martabat palsu, dengan tipu
                                    muslihat,
                                    atau
                                    pun rangkaian kebohongan, menggerakkan orang lain untuk menyerahkan barang sesuatu
                                    kepadanya,
                                    atau supaya memberi hutang maupun menghapuskan piutang, diancam karena penipuan dengan
                                    pidana
                                    penjara paling lama empat tahun.</span>
                            </li>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="3">
                                <span for="penalty3">Pasal 378 KUHP menerangkan bahwa yang dimaksud dengan penipuan adalah
                                    kondisi
                                    yang dilakukan oleh siapa pun dengan maksud untuk menguntungkan diri sendiri atau orang
                                    lain
                                    secara melawan hukum, dengan memakai nama palsu atau martabat palsu, dengan tipu
                                    muslihat,
                                    atau
                                    pun rangkaian kebohongan, menggerakkan orang lain untuk menyerahkan barang sesuatu
                                    kepadanya,
                                    atau supaya memberi hutang maupun menghapuskan piutang, diancam karena penipuan dengan
                                    pidana
                                    penjara paling lama empat tahun.</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-floating mb-3">
                        <select name="" id="officer" class="form-control @error('officer') is-invalid @enderror"
                            style="width: 100%" name="officer">
                            <option value="" selected disabled>Pilih Petugas</option>
                            <option value="sim">Petugas 1</option>
                            <option value="ktp">Petugas 2</option>
                        </select>
                        <label for="officer">Petugas</label>
                        @error('officer')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <img id="image-signature-officer" alt="" style="max-height: 150px;">
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-floating mb-3">
                        <canvas id="signature-pad"
                            class="signature-pad @error('signature')
                            is-invalid
                        @enderror"></canvas>
                        <input type="hidden" name="signature" id="signature"
                            class="@error('signature')
                            is-invalid
                        @enderror">
                        <label for="signature">Tanda Tangan Pelanggar</label>
                        @error('signature')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <button type="button" class="btn btn-danger btn-sm" id="clear"><i class="fa fa-eraser"></i>
                            Hapus</button>
                        <button type="button" class="btn btn-success btn-sm" id="save-png"><i class="fa fa-save"></i>
                            Simpan</button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-secondary text-white"><i class="fas fa-refresh"></i> Reset</button>
            </div>
    </div>
    </form>
    </div>
@endsection
@push('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

    <script>
        $(document).ready(function(e) {

            // Open Camera
            var myInput = document.getElementById('myFileInput');

            function sendPic() {
                var file = myInput.files[0];
            }

            myInput.addEventListener('change', sendPic, false);

            // Preview Image
            $('#myFileInput').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

            var canvas = document.getElementById('signature-pad');

            // Adjust canvas coordinate space taking into account pixel ratio,
            // to make it look crisp on mobile devices.
            // This also causes canvas to be cleared.
            function resizeCanvas() {
                // When zoomed out to less than 100%, for some very strange reason,
                // some browsers report devicePixelRatio as less than 1
                // and only part of the canvas is cleared then.
                var ratio = Math.max(window.devicePixelRatio || 1, 1);
                canvas.width = canvas.offsetWidth * ratio;
                canvas.height = canvas.offsetHeight * ratio;
                canvas.getContext("2d").scale(ratio, ratio);
            }

            window.onresize = resizeCanvas;
            resizeCanvas();

            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
            });

            document.getElementById('save-png').addEventListener('click', function() {
                if (signaturePad.isEmpty()) {
                    alert("Tanda Tangan Anda Kosong! Silahkan tanda tangan terlebih dahulu.");
                } else {
                    var data = signaturePad.toDataURL('upload/signature');
                    $("#signature").val(data);
                    console.log(data);
                }
            });

            document.getElementById('clear').addEventListener('click', function() {
                signaturePad.clear();
            });

            document.getElementById('undo').addEventListener('click', function() {
                var data = signaturePad.toData();
                if (data) {
                    data.pop(); // remove the last dot or line
                    signaturePad.fromData(data);
                }
            });

        });
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
