<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin', 'client',
        // ];

        // foreach($data as $value)
        // {
        //     Role::insert([

        //         'name' => $value
        //     ]);
        // }

    \App\Models\Book::factory(10)->create();



     \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12007948'),
            'no_hp' => '0859102724182',
            'address' => 'Sukabumi',
            'role_id' => 1
     ]);

     \App\Models\User::create([
            'name' => 'Ryan',
            'email' => 'ryan@gmail.com',
            'password' => bcrypt('12007949'),
            'no_hp' => '08561276261',
            'address' => 'Sukabumi',
            'role_id' => 0
     ]);

    \App\Models\Book::create([
        'book_code' => '3',
        'title' => 'Hujan Bulan Juni',
        'status' => 'in stok'
        // 'category'
     ]);
    }
}
