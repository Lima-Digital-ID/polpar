<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        $model = new User();
        $model->name = 'Admin';
        $model->email = 'admin@mail.com';
        $model->password = Hash::make('password');
        $model->save();
        Schema::enableForeignKeyConstraints();
    }
}
