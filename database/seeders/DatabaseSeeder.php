<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::create([
            "name"=>"Từ Hải Hiếu",
            "email"=>"hieu.tuhai2001@gmail.com",
            "password"=>bcrypt("huyenbon"),
         ]);
    }
}
