<?php

namespace Database\Seeders;

use App\Models\Officer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        Officer::truncate();
        $model = new Officer();
        $model->name = 'KUKUH PANDU';
        $model->nrp = '94040652';
        $model->rank = 'BRIPTU';
        $model->photo = 'ttd-pandu.png';
        $model->signature = 'ttd-pandu.png';
        $model->save();

        $model = new Officer();
        $model->name = 'FIRMAN ISWAHYUDI';
        $model->nrp = '85070061';
        $model->rank = 'AIPDA';
        $model->photo = 'ttd-firman.png';
        $model->signature = 'ttd-firman.png';
        $model->save();
        Schema::enableForeignKeyConstraints();
    }
}
