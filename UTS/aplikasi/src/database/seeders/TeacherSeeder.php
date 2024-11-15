<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;  // Pastikan model Teacher di-import

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacher = [
            'name' => 'Zayne',
            'address' => 'Jl. tetanggakikir',
            'email' => 'snowzayne@example.com',
            'phone' => '081234567890',
            'subject' => 'Matematika',
            'education' => 'S1 Pendidikan Matematika'
        ];

        // Membuat dan menyimpan data teacher
        Teacher::create($teacher);
    }
}

