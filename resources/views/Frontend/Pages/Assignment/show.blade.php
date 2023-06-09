<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    {{-- <title>{{ $data->url }}</title> --}}
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
            font-size: 16px;
        }

        .a4 {
            width: 210mm;
            height: 297mm;
            page-break-before: always;
        }

        span,
        ul,
        li {
            font-size: 14px;
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

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-0lax {
            text-align: left;
            vertical-align: top
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
        <div class="a4">
            {{-- <img src="{{ asset('/img/logo_polisi_emas.png') }}" class="logo-emas"> --}}
            {{-- KOP --}}
            <div class="row row-kop">
                <div class="col-sm-9 col-9 mt-4" style="font-size:14px;font-weight:500;text-align:start">
                    <div class="row">
                        <div class="col-sm-5 col-7 col-mobile-12" style="text-align: center">
                            <span class="text-center">KEPOLISIAN NEGARA REPUBLIK INDONESIA</span>
                            <br>
                            <span class="text-center">DAERAH JAWA TIMUR</span>
                            <br>
                            <span class="text-center">RESOR BONDOWOSO</span>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-3 mt-5" style="font-size: 14px">
                    {{-- <span><u>Nomor : 132456789</u></span> --}}
                </div>
            </div>
            <center style="font-size:14px;font-weight:500;margin-top:20px">

                <img src="{{ asset('/img/logo_polisi.png') }}" width="50px">
                <br>
                <span><u>SURAT PERINTAH</u></span>
                <br>
                <span>Nomor : {{ $data->no_surat }}</span>
            </center>
            <br>
            <table width="100%">
                <tr>
                    <td width="15%">
                        Pertimbangan
                    </td>
                    <td width="5%">:</td>
                    <td width="80%">
                        Bahwa dalam rangka kelancaran pelaksanaan tugas Operasional Kepolisian Resor
                        Bondowoso maka dipandang perlu mengeluarkan surat perintah.
                    </td>
                </tr>
                <tr>
                    <td width="15%">
                        Dasar
                    </td>
                    <td width="5%">:</td>
                    <td width="80%">
                        <ol>
                            <li>
                                Undang - undang Nomor 22 tahun 2002 tentang Kepolisian Negara Republik
                                Indonesia;</li>
                            <li>
                                Undang - undang Nomor 10 Tahun 2009 tentang Kepariwisataan;
                            </li>
                            <li>Surat Perintah Kapolres Bondowoso Nomor : Sprin / 4954 / XI / 2020 tentang
                                Penunjukan Personel Polisi Pariwisata di Polres Bondowoso.</li>
                        </ol>
                    </td>
                </tr>
            </table>
            <br>
            <center style="font-size:14px;font-weight:500;margin-top:20px">
                <span>DIPERINTAHKAN</span>
            </center>
            <br>
            <table>
                <tr>
                    <td width="15%">
                        Kepada
                    </td>
                    <td width="5%">:</td>
                    <td width="80%" style="style="font-size:14px;font-weight:500;"">
                        NAMA, PANGKAT, JABATAN SEBAGAIMANA YANG TERCANTUM DALAM
                        LAMPIRAN SURAT PERINTAH INI.
                    </td>
                </tr>
                <tr>
                    <td width="15%">
                        Untuk
                    </td>
                    <td width="5%">:</td>
                    <td width="80%">
                        <ol>
                            <li>
                                di samping melaksanakan tugas dan jabatan sehari-hari ditunjuk untuk giat
                                Patroli Ke Destinasi wisata di Kab. Bondowoso;</li>
                            <li>
                                patroli dilaksanakan pada tanggal
                                {{ \Carbon\Carbon::parse($data->date_start)->isoFormat('D MMMM') }} s.d
                                {{ \Carbon\Carbon::parse($data->date_end)->isoFormat('D MMMM Y') }}
                            </li>
                            <li>melaporkan hasil pelaksanannya kepada Kapolres Bondowoso melalui Kasat
                                Sabhara Polres Bondowoso ;</li>
                            <li>melaksanakan perintah ini dengan seksama dan penuh rasa tanggung jawab.</li>
                        </ol>
                    </td>
                </tr>
            </table>
            <div class="row">
                <div class="col-sm-12">
                    Selesai.
                </div>
            </div>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <table>
                        <tr>
                            <td>
                                Dikeluarkan</td>
                            <td>:</td>
                            <td>Bondowoso</td>
                        </tr>
                        <tr>
                            <td>
                                Pada Tanggal </td>
                            <td>:</td>
                            <td>{{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</td>
                        </tr>
                    </table>
                    <hr>
                    <center>
                        <span>
                            a.n.KEPALA KEPOLISIAN RESORT BONDOWOSO
                        </span>
                        <br>
                        <span>
                            KEPALA SATUAN SABHARA
                        </span>
                        <br>
                        <img width="75" height="75"
                            src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCABLAEsDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD7c/aH/aH1/wCD/i/wh4c8OeELDxPe67Z6jfyzanriaVBZwWaRPI7yPG642yk5OMba8pg/br8YKljfSeAPCGo6I+rWGlXl34e8f2+pyWjXUwijZo4oM9STyRnaaT9uuBR8SPAEl9Y63Jol74Z8UaLc6houjzak1o93b28UbNHEM9STgkZ2nmvj34RfCLSfhJ4eufDnhy58aeLdT8ReKfDlz/pfge902K2itL0vIzSOWGNshPOMbaAPv3wJ+2Tp/jXxfq2h/YtGsZdG1vWNM1G1k16L+0EgsoyyXMVqUDyiQqwKj7oUnJrybVf+CrXhbUJro+CfAfiTxfaTRxpo88dnPF/aN2r7ru3AETbTDARKSC2c4wOtfN3x58c6B43+I/xnl07StC8HeIb66j0DSWg1O3tLmeTTrt5dQmeYBGtjPAxQFv8AWElMt0rj/iZpXiz4l/DPwqvhTRH+Enhjw7odlq3hLSdNk+1X+tveSi3uZBdRCN3lWBQ8i4ZgiEtgHNAH6KP+1R438c61oq/Cf4UP418OapoMOuxa5qmqnSYcPI6eT88DgyDaCV3Zw3Su+0r9oLTdM1e18M+O4LbwZ4yXw8/iS/s5LxZrGztVn8kk3ZCofmK9h1r4U0b9orxL8L/hxpngnwD8X/ClhJ4Vuz4S06wvLK3uE1uSFRK161w0oFtE6OVGdw3R43EtxU8Z+Nr7V/iP43+J/wAO9CuvFeveJfBUz2eh6tIb+CfTDdRh9RjhkVlUCeLyhZBcnJkDY4oA+h/HX/BQ5fhlrOsaD4q8EDQde0zw3c600V7qflW15cxyosVraTtEFuBIjht6ZwQy7Tgmuk8Y/tYeP/Ci+CbFvhho66/r2jX2u3lve+LI7a0061t2jy7XLQbWBSVWOQu3kc4r5Vu/EXhf4M/GK28HzXmj+MtIufF+nWer3vj54rq70G3ktd0lpCLos5iJIkM6FVQnbjPNdN8UL3wV4i03wTceEpfF+qfDvWvB3ijw/FrkWl3WsXFtNcTxpl1XLFQyybQSBtUAcUAexaV+3L4uuNR8PtceAvCV5oeo+INP0C51Dw949t9Uezku5dkbNHFD7McEjO0819j4+lfj58DfhLpfwoj0Hwz4buPGXiu+1j4geGtTlkvfBN5pkNpBaXEnmO0j7lxiUHkjGDX7B0AfO37WH7U3gv4B3Ph/wz47utR0PRPGNjqMLeINLaTz7Bo0jA2LGjPvbzvlYfdK5r5j8B/F7SdI8W+GfAuiX3xF8Rat4t1GC/E+reNlKWtjbyLLBMk7oEYTRyEyW6nzAFCMA2K9e/4KO/AjWv2ifC/g3wf4c8GQavrF1qAP/CUS3MCNodv5kXnMI3ZXkDryRHz+656ivmXwH8Hm+GXhjwR8PtetLFfHvgDxFdyf2jrFq19pdgL+eMafNLbRfPI05hzGUf8AdFcyY4oAy/iD8JbT4RfFf4iz+OdP0DQdV8aa3qNxpl5rukDxIb21aRmjNva258y1dQxYySHDZHA2GuS1f9qDWfG3wQ8AfDzwHoltpdt4PWPTR441aVYLkruEe+DaS9tvEbJIAWJSTB4Oa0fiH8ePFnxG8TfGBPGlj4b8M+IvCbf2NH8VtEsJIJ7AJM8Ri2b3lkW4GYcJ9wTEt8uawvhz+yBa/GP4PeF9Nhlj0rU10xNaPiq1eWaJ2uQClg8LuQrx7ZHdo9o/ep8vXPg53mNPK8HLFVqqpxVryavu7aJat/1ZnrZdhvrVX2ajd7/108tep4/468dxX/xd0LxrJoHw3shaRXCpo2jWKyaYxi37RcQbxv8AM3cMTzhfSvS/HXxi8WeLm0vWNGsdK0TW7XRl0LTLn4Z63JpkdpE8xlVZYAGUgyMfl3qMgH0NfRfwi/Zv8V/DfwlfeH9X1zwbeadc6eliNEl0Vp7K7kVwxurgPIrNMwCqWXHCj057r4ofBnwH4n0Dw1/bvw78K+F/DXhq+ivL5NAQrPcWgBWZWmCRsI1V2k28kmNcH1+GhxtlFWpGnSzBc10tYStJt6W0WivZu9tLs91ZPiPt01b/ALd/rXyueKfDDTdK+IPg34kfEn/hXH/CV6t4U0G9so7zxTBDfsL5XjYRXYOWvpjglZ12hEHlkdzy/ga7079lv4j+F/D+tfG7xK2m2N1D4guI9Etb4aPaWyMs09n9njDLL5nm4Lo22PawcZNfVn7KfgzR9L8WeLvDHgbxzqun/DLwjrsU8hudUSd9VvZYVmUpMqqv2V0kbfGQzMyht4AxXA/EjT9B+FFl4kgk8LXPxFn8K77nxRb+Gb6HSNM0WylBnNlHDcKzSQ3cXzzJGz72Q/dyBX6pDm5VzbnyFSym1FWRvS/GDwf+0L8dD4j8IfEjxt4ZTSfEPh2KOzae7Ww1eOYkvCunhFeNW8sK0rZT59x4NfoIfpX5yfs7wXfj1/BfxM8PfDnVn07WNZit7fX01a2ttX0a0gnEb2t1NIq/abR12hIYkBEcO3JJBr9HKszPm/8AbD8QTfDqHwz41XRxqccf2jw9HLpeE1yC41Dy4YWspXPlp8w+beD0THQ18C6Trvj3wr+1B4ou28WeOvC+oJp1lczaJ4lv4ZdS1FI45HWeZ4l8p7WAZd0BDmNiFyxr64/b9+Ger/tA+N/hv8JrTxFc6Hp+u6breoGKNwkM97aR272nmnaxCB3OdozgnHNeEfEzxlcap8PPBnhzxNc/Ciy8SeD4p9IsvGmtXV9HYtLCscX+gSoNz3EBiXzhKgUMY8ZBNAEdr8DPAP7RmsxeF4PF/wDa9j4rnvNWuNWfcLX+2TH59ymkqYw0IDLGZfOB3REBTuBNT/B7RtZ/Z/8AB+p/Dn/hOLLxdqtnfta/atPifyNLCLiWJPMRcuP3fqMyg88ius+EX7UV3eWPiTW7X4R658R7Wy8OxeH7zxx4fsUmi1O+tkkFy7uZkH2c7wysqK5DnIHArkPCviKy1v4EeCviLHYWul6aLW5S9tNNV2is1LKEVQxZtqiBI8sSeVya+XzqGW4qvgcDm0E6VWtFa7XSlJJ/4mlF91Jo9TCSxNLD4qvhH78YOyXfvbrbV+tj274VeH/hjqfh3xDc+NdH/tDU7GL7S99dStK8kZIRQPmBLb2A545HIr5Q/assfEN78Mo7DTfEVxY+FF1CH+0rCZj5bW7OFBLDLBFJBKA47gcV5hrPiHWvH2q6tqv22ezguV+zxW6SFVMQYMsbAdQCqn/eGe1WPi38erPUf2f9V0rUXC+JLnZY+Tj/AFo3AmUfgvPv9a/TMZgsmxVOvScIt0bOKsvckl7vLppr29D89yvNcZLGUqcajlrapq9U9W5d7Lr3R9l/Ejwr8KfFX7OXlaF4GtfDN3oet2d7r+kyIv2XTJ4bV0iuNRCkmW38ooT5JLkOnOc15P8AEP4I/EU/CPxymo+J/hv4z/4Q+S18UeIw1jfG81FYIHltYJ3bCuhhYooGMKACRW34M8ReB/jH+xtp8nju98SeEPF3h/wjIt5f6WsC3uvaJE22RYBISskO7ylYsFbfHjOOvZ/FvX7/AMafsr3Nh8DfG2p/GrUEsJPDusacwilke3vUfbPOIlT97CqbEwdoGchq+Zjsj7OqnGpJN31ZxP7Ph+PPxq+Nvg67+IEvh/wv4bjSx1PRfA2oRSvZXFtbCMm6skjdgksS7CDIw+aUcHnH6jZr8jPhLr+tfD34lfAbwhplxpPwR8X3t9t8a6A8ksbX8MU8C2kcgfzCJbiJ5SgBVWLnkDFfrn+dUZHyD+12nhm0/aN+DGu+LdPl1LR/Dei+JfEDQwMwkD2kVrMrIAy5YFMgE4J618/+O/2ddf8ADfhfXPHMepaprPwh1m2m1+xudMt45/EOiLqKNNfJFbECExyB0WRncsqx5XBzn6M/bM1u3tfiD4F0lPBej+J9Q1LQfEMb32ua7LpdtY2AggF5udFYYaNvvH7uzIIrwjwv8ULLQPhho/hPTPBHgLW/h5Z+JdLjuYPDfxAn1OeznuLpVhdv3e4ruBOxm2kKRjFAHi37HWteMPB/w91i207xNfaX+z7r+tXdl/bLxRi/01ogrKJEKmNWvN0VvgseWIXBwad8evEPhr45XU/wz+FE/iT4bwaRFFbaj4D1GxSO4meAFU+zxpI0kzKBulVnUKkIf5iuK1/jN4g8GfCb4hfFb4c6P4Mj+J+g+KdWgu/EXiGy1OaCHRJp70iC2eOHciNDMBg5UsSFIrpvhF+y94Y0H4ufES6+Oer2fifwV4A02103R/Fsd2bGGBkndfs88sTKPtPzpuR2Zv3iZJyKwrYeliElVipWaaur2a2a810ZtSrTotuDtfR+a7HxZ4j0/wAZfD3xGnhjRPGvhvxnZiNZG1jSJxLaW6sSMzSuq+XjGTu6cc816h+z3+yM/wAQLPS/it8XpNXj+GT3ZimubaDYCACwuJHOAln8rBpVyQ2FC87hpftC6gmv+Ln8ceENF1D4j/AjVL1vE+q2NtY/ZItPu5gYWtJ7mDcyMiiFthYfeXjnNfTfg7WPDvxB/Z41r4HeF/iM2i6xB4el8JWngbxlZw6XdXWoySidLkAu0uNj+XtGQcZ60RoxjJy6sanSptzpU1GT3dt/8/nfXU8k+Cfwk+G/j74T3vxH+JPhnxzqB05W8RXuvtpscWmXlhakwf2dbOkqhkdQjfdU5jbn19x+IV54S+IXwm8H3vjX4n+DNN0PxF4jsNVGhJqJg06PTLNninhtpVQSyOysu8OeHyAwFeCfBWw+JXjjRrX4Aaf8Rdc1L4exWMui6zf+F/DVvqel2V1LLuEAvAQTEY3ZmlJBVsjHeuW8N/Dn4Cp+yndS61c+Grnx1ZaNrh8688TyQ6hDfxSyCzSOx37W3gA9ui8NmtzFtt3Z9C2etax4x+Ovw01a7+FkHhDw/Lq8Nvf6lr/nw6XqYt5o49EmtZ9zO9wsAcxodqOz/NuGCP0yr84f2f8A9sTxqmv+B/hXonhcfGzQrIaPHqHjfT1Hl6UtwiHbIkMbIhtxvXJYE+UScHNfo8aBHxz+3LpV5cfEXwFcN4f8Uavodz4b8TaJe3fhjRZdTls2vLeCKN2jTHfcQCRnaa+QvhL8DU+FGgXHhvwzoPxQ8QX3iDxR4eu5JtY8B3Gm29pFaXhkkdpN7jG1yecY21+wfakzxQB+d/xa/YWv/hr8Ro/iJ4a1PUtQXXfEV9eeJnstMa/k+zXTBbeFLAuVl8t5HJm4KA+YBlBXqHwKsoPhnqnjP4bSfB3Wk8EXuv3wsdS1SW41capcwxI7XFz50f7qJwkYjcs4ZwQORX2COaTuKAPgj9n/AODmvfFXwj4s8Z+H/DV/+zz4g1bVpotU0HW9NfVrK+gCRuHjsrkRxx5fGGRP4MZqj8Mf2ZNZ8V+PL7xh4g+FqaiPFkb2ur+M7/WpdI1XyS67p49MEZ+yTDylACSA45DfMa/QWlP9aAPyd8D+CPiLY/EnXfBvwF+EHibwV4PtmOs2eo+L7m7sVuNSj2xx3TvLGQ4CyOv2UsUcfMeVq1+0F8BNN+FKXvgv4Z+BfGEc+uPDbeLr1PBL69BLHNHmW4sruTJjeMSPhI9uWPUFRX6rnpQOtAHxD+yXp/xF0OeEeHzfXWh2Elnp+oaR4j8BReE5JbZsr9pScb2uHiVSdhHzFxlhmvt/FJ2oJ5oA/9kA">
                        <br>
                        <span>MARYATNO, S.SOS</span>
                        <hr>
                        <span>
                            AJUN KOMISARIS POLISI NRP 70040150
                        </span>
                    </center>
                </div>
            </div>
        </div>
        <div class="a4">
            {{-- <img src="{{ asset('/img/logo_polisi_emas.png') }}" class="logo-emas"> --}}
            {{-- KOP --}}
            <div class="row row-kop">
                <div class="col-sm-8 col-8 mt-4" style="font-size:14px;font-weight:500;text-align:start">
                    <div class="row">
                        <div class="col-sm-5 col-7 col-mobile-12" style="text-align: center">
                            <span class="text-center">KEPOLISIAN NEGARA REPUBLIK INDONESIA</span>
                            <br>
                            <span class="text-center">DAERAH JAWA TIMUR</span>
                            <br>
                            <span class="text-center">RESOR BONDOWOSO</span>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-4 mt-4" style="font-size: 14px">
                    <div class="" style="border:1px solid #000;width: 350px;padding-left:10px">
                        <table width="100%">
                            <tr>
                                <td colspan="3">LAMPIRAN SPRIN KAPOLRES BONDOWOSO</td>
                            </tr>
                            <tr>
                                <td>NOMOR</td>
                                <td>:</td>
                                <td>SPRIN/1175/VI/PAM.5.1.1/2023</td>
                            </tr>
                            <tr>
                                <td>TANGGAL</td>
                                <td>:</td>
                                <td>{{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <span>
                    <b>DAFTAR NAMA PERSONIL PENGAMANAN OBYEK WISATA BULAN
                        {{ \Carbon\Carbon::parse($data->date_create)->isoFormat('MMMM Y') }}</b>
                </span>
            </center>
            <br>
            <table class="tg" width="100%">
                <thead>
                    <tr>
                        <th class="tg-0lax text-center">
                            <center><b>NO</b></center>
                        </th>
                        <th class="tg-0lax">
                            <center><b>NAMA</b></center>
                        </th>
                        <th class="tg-0lax">
                            <center><b>PANGKAT/NRP</b></center>
                        </th>
                        <th class="tg-0lax">
                            <center><b>KETERANGAN</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detail as $o)
                        <tr>
                            <td>
                                {{ $loop->iteration }}.
                            </td>
                            <td>
                                {{ strtoupper($o->officer->name) }}
                            </td>
                            <td>
                                {{ $o->officer->rank }} / {{ $o->officer->nrp }}
                            </td>
                            @if ($loop->iteration == 1)
                                <td rowspan="4">{{ $data->note }}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <table>
                        <tr>
                            <td>
                                Dikeluarkan</td>
                            <td>:</td>
                            <td>Bondowoso</td>
                        </tr>
                        <tr>
                            <td>
                                Pada Tanggal </td>
                            <td>:</td>
                            <td>{{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</td>
                        </tr>
                    </table>
                    <hr>
                    <center>
                        <span>
                            a.n.KEPALA KEPOLISIAN RESORT BONDOWOSO
                        </span>
                        <br>
                        <span>
                            KEPALA SATUAN SABHARA
                        </span>
                        <br>
                        <img width="75" height="75"
                            src="data:image/jpg;base64,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">
                        <br>
                        <span>MARYATNO, S.SOS</span>
                        <hr>
                        <span>
                            AJUN KOMISARIS POLISI NRP 70040150
                        </span>
                    </center>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        window.print();
        window.onafterprint = window.close;
    </script>
</body>

</html>
