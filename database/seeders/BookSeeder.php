<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book; // Pastikan untuk mengimpor model Book
use Illuminate\Support\Facades\DB; // Impor DB facade

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu untuk menghindari duplikasi data
        DB::table('books')->truncate();

        // Data buku populer di Indonesia
        $books = [
            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'year' => 2005,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'year' => 1980,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Negeri 5 Menara',
                'author' => 'Ahmad Fuadi',
                'year' => 2009,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cantik Itu Luka',
                'author' => 'Eka Kurniawan',
                'year' => 2002,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perahu Kertas',
                'author' => 'Dee Lestari',
                'year' => 2009,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ayat-Ayat Cinta',
                'author' => 'Habiburrahman El Shirazy',
                'year' => 2004,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ronggeng Dukuh Paruk',
                'author' => 'Ahmad Tohari',
                'year' => 1982,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh',
                'author' => 'Dee Lestari',
                'year' => 2001,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '5 cm',
                'author' => 'Donny Dhirgantoro',
                'year' => 2005,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dilan: Dia adalah Dilanku Tahun 1990',
                'author' => 'Pidi Baiq',
                'year' => 2014,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'Gadis Kretek',
                'author' => 'Ratih Kumala',
                'year' => 2012,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Masukkan data ke dalam tabel 'books'
        Book::insert($books);
    }
}
