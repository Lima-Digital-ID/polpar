@extends('Frontend.Layouts.template')
@push('custom-css')
    <style>
        .text-capitalize {
            text-transform: uppercase !important;
        }

        li:not(:last-child) {
            margin-bottom: 20px;
        }
    </style>
@endpush
@section('content')
    <form action="{{ url('reprimand') }}" method="POST">
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
            <div class="col-12 col-md-6">
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                        name="name" />
                    <label for="name">Nama</label>
                    <div class="invalid-feedback">A name is required.</div>
                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="form-floating mb-3">
                    <select name="" id="identity" class="form-control" name="identity">
                        <option value="" selected disabled>Pilih Jenis Identitas</option>
                        <option value="sim">SIM</option>
                        <option value="ktp">KTP</option>
                    </select>
                    <label for="identity">Identitas</label>
                    <div class="invalid-feedback">A name is required.</div>
                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="form-floating mb-3">
                    <input class="form-control" id="identityNumber" type="number" placeholder="Enter your name..."
                        name="identityNumber" />
                    <label for="identityNumber">No Identitas</label>
                    <div class="invalid-feedback">A name is required.</div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-floating mb-3">
                    <input class="form-control" id="phone" type="text" placeholder="Enter your name..."
                        name="phone" />
                    <label for="phone">No Whatsapp</label>
                    <div class="invalid-feedback">A name is required.</div>
                </div>
            </div>
            <div class="col-12">
                <ol>
                    <li>
                        <input type="checkbox" name="penalty[]" id="" value="1">
                        <span for="penalty1">Pasal 378 KUHP menerangkan bahwa yang dimaksud dengan penipuan adalah kondisi
                            yang dilakukan oleh siapa pun dengan maksud untuk menguntungkan diri sendiri atau orang lain
                            secara melawan hukum, dengan memakai nama palsu atau martabat palsu, dengan tipu muslihat, atau
                            pun rangkaian kebohongan, menggerakkan orang lain untuk menyerahkan barang sesuatu kepadanya,
                            atau supaya memberi hutang maupun menghapuskan piutang, diancam karena penipuan dengan pidana
                            penjara paling lama empat tahun.</span>
                    </li>
                    <li>
                        <input type="checkbox" name="penalty[]" id="" value="2">
                        <span for="penalty2">Pasal 378 KUHP menerangkan bahwa yang dimaksud dengan penipuan adalah kondisi
                            yang dilakukan oleh siapa pun dengan maksud untuk menguntungkan diri sendiri atau orang lain
                            secara melawan hukum, dengan memakai nama palsu atau martabat palsu, dengan tipu muslihat, atau
                            pun rangkaian kebohongan, menggerakkan orang lain untuk menyerahkan barang sesuatu kepadanya,
                            atau supaya memberi hutang maupun menghapuskan piutang, diancam karena penipuan dengan pidana
                            penjara paling lama empat tahun.</span>
                    </li>
                    <li>
                        <input type="checkbox" name="penalty[]" id="" value="3">
                        <span for="penalty3">Pasal 378 KUHP menerangkan bahwa yang dimaksud dengan penipuan adalah kondisi
                            yang dilakukan oleh siapa pun dengan maksud untuk menguntungkan diri sendiri atau orang lain
                            secara melawan hukum, dengan memakai nama palsu atau martabat palsu, dengan tipu muslihat, atau
                            pun rangkaian kebohongan, menggerakkan orang lain untuk menyerahkan barang sesuatu kepadanya,
                            atau supaya memberi hutang maupun menghapuskan piutang, diancam karena penipuan dengan pidana
                            penjara paling lama empat tahun.</span>
                    </li>
                </ol>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-secondary text-white"><i class="fas fa-refresh"></i> Reset</button>
            </div>
        </div>
    </form>
@endsection
