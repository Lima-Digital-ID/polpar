<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $data->url }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> --}}
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
            font-family: 'Poppins', sans-serif;
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

        .logo-polisi-emas {
            position: absolute;
            top: 65px;
            left: 683px;
        }

        @media only screen and (max-width: 600px) {
            .logo-emas {
                position: absolute;
                top: 271px;
                left: 115px;
                width: 121px;
                height: 129px;
                z-index: -5;
            }

            .identitas-pelanggar {
                width: 70px
            }

            .pelanggar {
                width: 70px
            }

            .span-mobile-text {
                font-size: 10px;
            }

            .col-mobile-12 {
                flex: 0 0 auto !important;
                width: 100% !important;
            }

            .logo-polisi-emas {
                position: absolute;
                top: 119px;
                left: 174px;
            }

            .row-kop {
                margin-bottom: 70px
            }
        }

        @media print {
            .logo-emas {
                position: absolute;
                top: 230px;
                left: 279px;
                width: 200px;
                height: 200px;
                z-index: -5;
            }


            .logo-polisi-emas {
                position: absolute;
                top: 65px;
                left: 325px;
            }
        }
    </style>
</head>

<body class="d-flex flex-column" style="margin-left:20px;margin-right:20px">
    <main class="flex-shrink-0">
        {{-- <img src="{{ asset('/img/logo_polisi_emas.png') }}" class="logo-emas"> --}}
        {{-- KOP --}}
        <div class="row row-kop">
            <div class="col-sm-9 col-9 mt-4" style="font-size:13px;font-weight:500;text-align:start">
                <div class="row">
                    <div class="col-sm-5 col-7 col-mobile-12" style="text-align: center">
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
            <div class="col-sm-3 col-3 mt-5" style="font-size: 13px">
                {{-- <span><u>Nomor : 132456789</u></span> --}}
            </div>
        </div>
        {{-- BODY --}}
        <center style="font-size:13px;font-weight:500;margin-top:20px">

            <img src="{{ asset('/img/logo_polisi_emas.png') }}" width="50px" class="logo-polisi-emas">
            <span><u>SURAT TEGURAN POLISI PARIWISATA</u></span>
            <br>
            <span>{{ Str::upper('tourism police warning letter') }}</span>
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
            <span>After being given a warning until the moment this certificate is issued which is based on:</span>
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
            <u>Bahwa nama tersebut diatas melakukan pelanggaran pariwisata</u>
            <br>
            <span>That the name mentioned above committed a tourism violation</span>
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
            <div class="col-md-2 col-2">
                <img src="{{ url('storage/identitas-pelanggar') . '/' . $data->image_identity }}" alt=""
                    class="identitas-pelanggar" width="150px">
            </div>
            <div class="col-md-4 col-4">
                <img src="{{ url('storage/pelanggar') . '/' . $data->image }}" alt="" class="pelanggar"
                    width="150px">
            </div>
            <div class="col-md-6 col-6">
                <table>
                    <tr>
                        <td>
                            <span class="span-mobile-text"><u>Dikeluarkan di</u></span>
                            <br>
                            <span class="span-mobile-text">Issued in</span>
                        </td>
                        <td><span class="span-mobile-text">:</span></td>
                        <td><span class="span-mobile-text">Bondowoso</span></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span-mobile-text"><u>Pada Tanggal</u></span>
                            <br>
                            <span class="span-mobile-text">on</span>
                        </td>
                        <td><span class="span-mobile-text">:</span></td>
                        <td><span class="span-mobile-text">
                                {{ \Carbon\Carbon::now()->format('d-m-Y') }}</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        window.print();
        window.onafterprint = window.close;
    </script>
</body>

</html>
