<?php

namespace Database\Seeders;

use App\Models\Penalty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PenaltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Penalty::truncate();

        $model = new Penalty();
        $model->title = 'Pasal 14';
        $model->content = '<ul>
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
    </ul>';
        $model->save();

        $model = new Penalty();
        $model->title = 'Pasal 15';
        $model->content = ' <ul>
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
    </ul>';
        $model->save();

        $model = new Penalty();
        $model->title = 'Pasal 54';
        $model->content = '  <ul>
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
    </ul>';
        $model->save();

        $model = new Penalty();
        $model->title = 'Pasal 55';
        $model->content = '<ul>
        <li>
            Ketentuan lebih lanjut mengenai sertifikasi kompetensi
            sebagaimana dimaksud dalam Pasal 53 dan sertifikasi
            usaha sebagaimana dimaksud dalam Pasal 54 diatur
            dalam Peraturan Pemerintah.
        </li>
    </ul>';
        $model->save();

        $model = new Penalty();
        $model->title = 'Pasal 63';
        $model->content = '<ul>
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
    </ul>';
        $model->save();

        $model = new Penalty();
        $model->title = 'Pasal 64';
        $model->content = ' <ul>
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
    </ul>';
        $model->save();
        Schema::enableForeignKeyConstraints();
    }
}
