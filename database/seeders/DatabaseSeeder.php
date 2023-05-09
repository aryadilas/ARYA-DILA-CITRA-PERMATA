<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create([
            'nama' => 'Arya Dila C P',
            'umur' => 23,
            'jenisKelamin' => 'Laki - Laki',
            'alamat' => 'Bandung'
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
