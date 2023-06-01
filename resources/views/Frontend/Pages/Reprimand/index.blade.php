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
                        <input id="myFileInput" type="file" accept="capture=camera" name="photo"
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
                            placeholder="Enter your name..." name="name" onkeyup="pelanggar()" />
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
                <div class="col-6 col-md-6">

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
                <div class="col-6 col-md-6">
                    <div class="mb-3">

                        <img id="preview-identity-before-upload" alt="" style="max-height: 150px;">
                    </div>
                </div>
                <div class="col-12">
                    <center>
                        <h3>
                            UNDANG-UNDANG REPUBLIK INDONESIA
                            NOMOR 10.TAHUN 2009.
                        </h3>
                        <h3>
                            TENTANG
                            KEPARIWISATAAN
                        </h3>
                    </center>
                    <div class="mb-3">
                        <ol>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="1">
                                <span for="penalty1">Pasal 14 </span>
                                <ul>
                                    <li>
                                        Usaha pariwisata meliputi, antara lain:
                                        <ul>
                                            <li>
                                                daya tarik wisata;
                                            </li>
                                            <li>
                                                kawasan pariwisata;
                                            </li>
                                            <li>
                                                jasa transportasi wisata;
                                            </li>
                                            <li>
                                                jasa perjalanan wisata;
                                            </li>
                                            <li>
                                                jasa makanan dan minuman;
                                            </li>
                                            <li>
                                                penyediaan akomodasi;
                                            </li>
                                            <li>
                                                penyelenggaraan kegiatan hiburan dan rekreasi;
                                            </li>
                                            <li>
                                                penyelenggaraan pertemuan, perjalanan insentif,
                                                konferensi, dan pameran;
                                            </li>
                                            <li>
                                                jasa informasi pariwisata;
                                            </li>
                                            <li>
                                                jasa konsultan pariwisata;
                                            </li>
                                            <li>
                                                jasa pramuwisata;
                                            </li>
                                            <li>
                                                wisata tirta; dan
                                            </li>
                                            <li>
                                                spa;
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Usaha pariwisata selain sebagaimana dimaksud pada
                                        ayat (1) diatur dengan Peraturan Menteri
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="2">
                                <span for="penalty2">Pasal 15 </span>
                                <ul>
                                    <li>
                                        Untuk dapat menyelenggarakan usaha pariwisata
                                        sebagaimana dimaksud dalam Pasal 14, pengusaha
                                        pariwisata wajib mendaftarkan usahanya terlebih
                                        dahulu kepada Pemerintah atau Pemerintah Daerah.
                                    </li>
                                    <li>Ketentuan lebih lanjut mengenai tata cara
                                        pendaftaran sebagaimana dimaksud pada ayat (1)
                                        diatur dengan Peraturan Menteri.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="3">
                                <span for="penalty3">Pasal 53</span>
                                <ul>
                                    <li>
                                        Tenaga kerja di bidang kepariwisataan memiliki
                                        standar kompetensi.
                                    </li>
                                    <li>
                                        Standar kompetensi sebagaimana dimaksud pada
                                        ayat (1) dilakukan melalui sertifikasi kompetensi.
                                    </li>
                                    <li>
                                        Sertifikasi kompetensi dilakukan oleh lembaga
                                        sertifikasi profesi yang telah mendapat lisensi sesuai
                                        dengan ketentuan peraturan perundang-undangan.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="4">
                                <span for="penalty4">Pasal 54</span>
                                <ul>
                                    <li>
                                        Produk, pelayanan, dan pengelolaan usaha
                                        pariwisata memiliki standar usaha.
                                    </li>
                                    <li>
                                        Standar usaha sebagaimana dimaksud pada ayat (1)
                                        dilakukan melalui sertifikasi usaha.
                                    </li>
                                    <li>
                                        Sertifikasi usaha sebagaimana dimaksud pada ayat (2)
                                        dilakukan oleh lembaga mandiri yang berwenang
                                        sesuai dengan ketentuan peraturan
                                        perundang-undangan.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="5">
                                <span for="penalty5">Pasal 55</span>
                                <ul>
                                    <li>
                                        Ketentuan lebih lanjut mengenai sertifikasi kompetensi
                                        sebagaimana dimaksud dalam Pasal 53 dan sertifikasi
                                        usaha sebagaimana dimaksud dalam Pasal 54 diatur
                                        dalam Peraturan Pemerintah.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="6">
                                <span for="penalty6">Pasal 63</span>
                                <ul>
                                    <li>
                                        Setiap pengusaha pariwisata yang tidak memenuhi
                                        ketentuan sebagaimana dimaksud dalam Pasal 15
                                        dan/atau Pasal 26 dikenai sanksi administratif.
                                    </li>
                                    <li>
                                        Sanksi administratif sebagaimana dimaksud pada
                                        ayat (1) berupa:
                                        <ul>
                                            <li>
                                                teguran tertulis;
                                            </li>
                                            <li>
                                                pembatasan kegiatan usaha; dan
                                            </li>
                                            <li>
                                                pembekuan sementara kegiatan usaha.
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="penalty[]" id="" value="7">
                                <span for="penalty7">Pasal 64</span>
                                <ul>
                                    <li>
                                        Setiap orang yang dengan sengaja dan melawan
                                        hukum merusak fisik daya tarik wisata sebagaimana
                                        dimaksud dalam Pasal 27 dipidana dengan pidana
                                        penjara paling lama 7 (tujuh) tahun dan denda paling
                                        banyak Rp10.000.000.000,00 (sepuluh miliar
                                        rupiah).
                                    </li>
                                    <li>
                                        Setiap orang yang karena kelalaiannya dan melawan
                                        hukum, merusak fisik, atau mengurangi nilai daya
                                        tarik wisata sebagaimana dimaksud dalam Pasal 27
                                        dipidana dengan pidana penjara paling lama 1 (satu)
                                        tahun dan/atau denda paling banyak
                                        Rp5.000.000.000,00 (lima miliar rupiah)
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-floating mb-3">
                        <select id="officer" class="form-control @error('officer') is-invalid @enderror"
                            style="width: 100%" name="officer">
                            <option value="" selected disabled>Pilih Petugas</option>
                            @foreach ($officer as $ofc)
                                <option value="{{ $ofc->id }}" data-signature="{{ $ofc->signature }}">
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
                <div class="col-6 col-md-6">
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
                <button type="submit" class="btn btn-primary" id="saveForm"><i class="fas fa-save"></i>
                    Simpan</button>
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

            $('#saveForm').click(function() {
                console.log('asd');

            });

        });

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
