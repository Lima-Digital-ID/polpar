<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/') }}css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        body {
            margin-left: 20px;
            margin-right: 200px;
        }

        span,
        ul,
        li {
            font-size: 13px;
        }

        .logo-emas {
            position: absolute;
            top: 200px;
            left: 480px;
            width: 200px;
            height: 200px;
            z-index: -5;
        }

        @media only screen and (max-width: 600px){
            .logo-emas{
                position: absolute;
    top: 271px;
    left: 115px;
    width: 121px;
    height: 129px;
    z-index: -5;
            }

            .identitas-pelanggar{
                width: 70px
            }

            .pelanggar{
                width: 70px
            }
        }

        @media print {
            .logo-emas {
                position: absolute;
                top: 200px;
                left: 279px;
                width: 200px;
                height: 200px;
                z-index: -5;
            }
        }
    </style>
</head>

<body class="d-flex flex-column" style="margin-left:20px;margin-right:20px">
    <main class="flex-shrink-0">
        <img src="{{ asset('/img/logo_polisi_emas.png') }}" class="logo-emas">
        {{-- KOP --}}
        <div class="row">
            <div class="col-sm-9 mt-4" style="font-size:13px;font-weight:500;text-align:start">
                <div class="row">
                    <div class="col-sm-8" style="text-align: center">
                        <span class="text-center">KEPOLISIAN NEGARA REPUBLIK INDONESIA</span>
                        <br>
                        <span class="text-center">DAERAH JAWA TIMUR</span>
                        <br>
                        <span class="text-center">RESOR BONDOWOSO</span>
                        <br>
                        <span style="font-size:13px"><u>Jl. Veteran No.1
                                Bondowoso
                                68211</u></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5" style="font-size: 13px">
                {{-- <span><u>Nomor : 132456789</u></span> --}}
            </div>
        </div>
        {{-- BODY --}}
        <center style="font-size:13px;font-weight:500;margin-top:20px">
            <span><u>SURAT KETERANGAN CATATAN KEPOLISIAN</u></span>
            <br>
            <span>POLICE RECORD</span>
            <br>
            <span>Nomor : {{ $data->number_reprimand }}</span>
        </center>

        <table width="100%">
            <tr>
                <td>
                    <span><u>Diterangkan Bersama ini bahwa :</u></span>
                    <br>
                    <span>This is to certify that:</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span><u>Nama</u></span>
                    <br>
                    <span>Name</span>
                </td>
                <td>:</td>
                <td><span>{{ $data->name }}</span></td>
            </tr>
            <tr>
                <td>
                    <span><u>Identitas</u></span>
                    <br>
                    <span>Identity</span>
                </td>
                <td>:</td>
                <td><span>{{ Str::upper($data->identity) }}</span></td>
            </tr>
            <tr>
                <td>
                    <span><u>No Identitas</u></span>
                    <br>
                    <span>Identity Number</span>
                </td>
                <td>:</td>
                <td><span>{{ $data->identity_number }}</span></td>
            </tr>
            <tr>
                <td>
                    <span><u>No Whatsapp</u></span>
                    <br>
                    <span>Whatsapp No</span>
                </td>
                <td>:</td>
                <td><span>{{ $data->phone }}</span></td>
            </tr>
        </table>
        <span>
            <u>Setelah diadakan teguran hingga saat dikeluarkan surat keterangan ini yang didasarkan kepada :</u>
            <br>
            <span>The bearer here of proves not to be involved</span>
        </span>
        <ul>
            @foreach ($penaltyReprimand as $p)
                <li>
                    <span for="penalty1">{{ $p->penalty->title }}</span>
                    {!! $p->penalty->content !!}
                </li>
            @endforeach
        </ul>
        <span>
            <u>Bahwa nama tersebut diatas melakukan pelanggaran dalam wisata</u>
            <br>
            <span>The bearer here of proves not to be involved</span>
        </span>
        <center>
            <span>
                <u>Keterangan ini diberikan berhubungan dengan pelanggar</u>
                <br>
                <span>This certificate is issued at the request to the appliant</span>
            </span>

        </center>
        <br>
        <div class="row" style="text-align: end">
            <div class="col-sm-2 col-2">
                <img src="{{ url('storage/identitas-pelanggar') . '/' . $data->image_identity }}" alt="" class="identitas-pelanggar"
                    width="150px">
            </div>
            <div class="col-sm-4 col-4">
                <img src="{{ url('storage/pelanggar') . '/' . $data->image }}" alt="" class="pelanggar" width="150px">
            </div>
            <div class="col-sm-6 col-6">
                <table>
                    <tr>
                        <td>
                            <span><u>Dikeluarkan di</u></span>
                            <br>
                            <span>Issued in</span>
                        </td>
                        <td>:</td>
                        <td><span>Bondowoso</span></td>
                    </tr>
                    <tr>
                        <td>
                            <span><u>Pada Tanggal</u></span>
                            <br>
                            <span>on</span>
                        </td>
                        <td>:</td>
                        <td><span>
                                {{ \Carbon\Carbon::now()->format('d-m-Y') }}</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
