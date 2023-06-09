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
        $model->name = 'Petugas 1';
        $model->nrp = '123';
        $model->rank = 'AIPDA';
        $model->photo = 'https://www.signwell.com/assets/vip-signatures/bill-gates-signature-076c39063061e89dab6ddba42853069e2caf9ff9d29a2c6be64af131a22248e6.svg';
        $model->signature = 'https://www.signwell.com/assets/vip-signatures/bill-gates-signature-076c39063061e89dab6ddba42853069e2caf9ff9d29a2c6be64af131a22248e6.svg';
        $model->save();

        $model = new Officer();
        $model->name = 'Petugas 2';
        $model->nrp = '456';
        $model->rank = 'AIPTU';
        $model->photo = 'https://www.signwell.com/assets/vip-signatures/barack-obama-signature-b8614607575251b55f9386853536ef918f439600ccbda927b11aca9bf1d1842e.png';
        $model->signature = 'https://www.signwell.com/assets/vip-signatures/barack-obama-signature-b8614607575251b55f9386853536ef918f439600ccbda927b11aca9bf1d1842e.png';
        $model->save();
        Schema::enableForeignKeyConstraints();
    }
}
