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
        .content-pasal .content{
            display: none
        }
        .content-pasal.show .content{
            display: block
        }
        .content-pasal.checked .pasal{
            color:#198754;
            font-weight: bold;
        }
    </style>

    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
@endpush
@section('content')
    <div class="col-md-offset-2 mg-b-40">
        <form action="{{ url('reprimand') }}" id="submitForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <center>
                        <img src="{{ asset('/img/logo_polisi.png') }}" alt="" width="150px">
                        <h5 class="text-center text-capitalize">Kepolisian Negara Republik Indonesia</h5>
                        <h5 class="text-center text-capitalize">Daerah Jawa Timur</h5>
                        <h5 class="text-center text-capitalize">Resor Bondowoso</h5>
                    </center>
                </div>
                <div class="col-12 mb-3 mt-5">
                    <h2 class="text-center fw-bold text-capitalize">Surat Teguran</h2>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="myFileInput">Foto Pelanggar</label>
                        <input id="myFileInput" type="file" accept="capture=camera" name="photo"
                            class="form-control @error('photo')
                                is-invalid
                            @enderror">
                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3" id="col-preview" style="display: none">
                        <img id="preview-image-before-upload" alt="" style="max-height: 150px;">
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text"
                            placeholder="Enter your name..." name="name" onkeyup="pelanggar()" />
                        <label for="name">Nama Pelanggar</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
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
                <div class="col-md-6">
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
                <div class="col-md-6">

                    <div class="mb-3">
                        <label for="myFileInputIdentity">File Identitas</label>
                        <input id="myFileInputIdentity" type="file" accept="capture=camera" name="identity_file"
                            class="form-control @error('identity_file')
                                is-invalid
                            @enderror">
                        @error('identity_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6" style="display: none" id="col-preview-identity">
                    <div class="mb-3">

                        <img id="preview-identity-before-upload" alt="" style="max-height: 150px;">
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <center>
                        <h5 class="fw-bold mb-4">
                            UNDANG-UNDANG REPUBLIK INDONESIA
                            NOMOR 10.TAHUN 2009.
                            TENTANG
                            KEPARIWISATAAN
                        </h5>
                    </center>
                        @foreach ($pasal as $key => $p)
                            <div class="content-pasal" id="cp{{$key}}">
                                <div class="d-flex pasal justify-content-between" data-key="{{$key}}">
                                    <div>
                                        <span class="fa fa-check-circle me-2"></span>
                                        {{ $p->title }}
                                    </div>
                                    <a href="" class="btn btn-primary btn-sm detail" data-key="{{$key}}">Lihat Detail</a>
                                </div>
                                <div class="content mt-2">
                                    {!! $p->content !!}
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    {{-- <div class="mb-3">
                        <ol>
                            @foreach ($pasal as $p)
                                <li>
                                    <input type="radio" name="penalty[]" id="" value="{{ $p->id }}">
                                    <span for="penalty{{ $p->id }}">{{ $p->title }}</span>
                                    {!! $p->content !!}
                                </li>
                            @endforeach
                        </ol>
                    </div> --}}
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-floating">
                        <select id="officer" class="form-control @error('officer') is-invalid @enderror"
                            style="width: 100%" name="officer">
                            <option value="" selected disabled>Pilih Petugas</option>
                            @foreach ($officer as $ofc)
                                <option value="{{ $ofc->id }}"
                                    data-signature="{{ url('image/signature-officer') . '/' . $ofc->signature }}">
                                    {{ $ofc->name }}</option>
                            @endforeach
                        </select>
                        <label for="officer">Petugas</label>
                        @error('officer')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <img id="image-signature-officer" alt="" width="150px" class="mt-4">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <canvas id="signature-pad"
                            class="signature-pad simpanttd @error('signature')
                            is-invalid
                        @enderror"></canvas>
                        <input type="hidden" name="signature" id="signature"
                            class="@error('signature')
                            is-invalid
                        @enderror">
                        <label for="signature">Bondowoso , {{ date('d-m-Y') }}</label>
                        <span class="pelanggarName"></span>
                        @error('signature')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <button type="button" class="btn btn-danger btn-sm mb-3" id="clear"><i
                                class="fa fa-eraser"></i>
                            Hapus Tanda Tangan</button>
                        <button type="button" class="btn btn-success btn-sm mb-3" id="save-png"><i
                                class="fa fa-save"></i>
                            Simpan Tanda Tangan</button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="javascript:void(0)" class="btn btn-primary" id="saveForm" onclick="submit()"><i
                        class="fas fa-save"></i>
                    Simpan</a>
                <button type="reset" class="btn btn-secondary text-white"><i class="fas fa-refresh"></i> Reset</button>
            </div>
    </div>
    <input type="hidden" name="">
    </form>
    </div>
@endsection
@push('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

    <script>
        $(document).ready(function(e) {
            $(".detail").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                var key = $(this).data('key')
                if($(this).closest('.content-pasal').hasClass("show")){
                    $(".content-pasal").removeClass('show')
                }
                else{
                    $(".content-pasal").removeClass('show')
                    $(".content-pasal#cp"+key+"").addClass('show')
                }
            })
            $(".pasal").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                
                var key = $(this).data('key')
                $(".content-pasal").removeClass('checked')
                $(".content-pasal#cp"+key+"").addClass('checked')
            })
   
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
                    $("#col-preview").show()
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

            // Open Camera
            var myInput = document.getElementById('myFileInputIdentity');

            function sendPic() {
                var file = myInput.files[0];
            }

            myInput.addEventListener('change', sendPic, false);

            // Preview Image
            $('#myFileInputIdentity').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {
                    $("#col-preview-identity").show()
                    $('#preview-identity-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

            // Preview Image Signature Officer
            $('#officer').change(function() {
                var signature = $(this).find(":selected").data("signature")
                $('#image-signature-officer').attr('src',
                    signature
                );
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
            // $('.simpanttd').click(function() {
            //     if (signaturePad.isEmpty()) {
            //         alert("Tanda Tangan Anda Kosong! Silahkan tanda tangan terlebih dahulu.");
            //     } else {
            //         var data = signaturePad.toDataURL('upload/signature');
            //         $("#signature").val(data);
            //         console.log(data);
            //     }
            // });

            document.getElementById('save-png').addEventListener('click', function() {
                if (signaturePad.isEmpty()) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal !',
                        text: 'Tanda Tangan Anda Kosong! Silahkan tanda tangan terlebih dahulu.',
                    })
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses !',
                        text: 'Berhasil Menyimpan Tanda Tangan',
                    })
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

            $('#saveForm').click(function() {
                console.log('asd');

            });

        });

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
