<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Gender;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_id' => '1',
            'role_desc' => 'User',
        ]);

        Role::create([
            'role_id' => '2',
            'role_desc' => 'Admin',
        ]);

        Gender::create([
            'gender_id' => '1',
            'gender_desc' => 'Male',
        ]);

        Gender::create([
            'gender_id' => '2',
            'gender_desc' => 'Female',
        ]);


        User::create([
            'first_name' => 'Admin',
            'middle_name' => 'Satu',
            'last_name' => 'Ya',
            'gender_id' => '1',
            'email' => 'admin@mail.com',
            'role_id' => '2',
            'password' => bcrypt('admin'),
            'display_picture_link' => '03.jpg',
        ]);

        User::create([
            'first_name' => 'User',
            'middle_name' => 'Satu',
            'last_name' => 'Ya',
            'gender_id' => '2',
            'email' => 'user@mail.com',
            'role_id' => '1',
            'password' => bcrypt('user'),
            'display_picture_link' => '03.jpg',
        ]);

        Book::create([
            'title' => 'Dunia Sophie',
            'author' => 'Jostein Gaarder',
            'description' => 'Dunia Sophie (bahasa Norwegia: Sofies verden, bahasa Inggris: Sophies World) adalah sebuah novel karya Jostein Gaarder,
             diterbitkan di Indonesia oleh Penerbit Mizan tahun 1996. Aslinya ditulis dalam bahasa Norwegia, tetapi sudah diterjemahkan kedalam 
             limapuluhtiga bahasa, termasuk bahasa Indonesia.

            Novel ini sebagian besar terdiri dari dialog-dialog antara Sophie, seorang gadis remaja, dan seorang pria misterius bernama Alberto
             Knox, yang saling terkait dengan plot yang unik dan misterius, novel ini menjadi sebuah novel sekaligus panduan dasar filsafat.
              Pada tahun 1999, novel ini diadaptasi ke dalam sebuah film di Norwegia.',
        ]);

       
    }
}
