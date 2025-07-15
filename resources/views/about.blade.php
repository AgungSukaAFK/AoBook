@extends('layouts.app')

@section('title', 'Tentang Kami - AoBook')

@section('content')
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg transition-colors duration-300">
    <div class="p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-indigo-600 dark:text-indigo-500">AoBook</h1>
            <p class="mt-2 text-xl text-gray-600 dark:text-gray-400">Manajemen Koleksi Buku Sederhana</p>
        </div>

        <div class="mt-8 text-gray-700 dark:text-gray-300 space-y-4">
            <p>
                <strong>AoBook</strong> adalah sebuah aplikasi web sederhana yang dibangun untuk memenuhi kebutuhan dasar dalam mengelola daftar koleksi buku. Aplikasi ini dibuat menggunakan framework <a href="https://laravel.com/" target="_blank" class="text-indigo-500 hover:underline">Laravel 12</a> dan didesain dengan antarmuka yang bersih dan modern menggunakan <a href="https://tailwindcss.com/" target="_blank" class="text-indigo-500 hover:underline">Tailwind CSS</a>.
            </p>
            <p>
                Fitur utama dari aplikasi ini meliputi kemampuan untuk melihat daftar buku, menambah data buku baru, memperbarui informasi buku yang sudah ada, serta menghapus buku dari koleksi.
            </p>
        </div>

        <div class="mt-10 pt-8 border-t border-gray-200 dark:border-gray-700">
            <h2 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200">Tentang Pengembang</h2>
            <div class="mt-6 max-w-lg mx-auto flex flex-col items-center">
                <img class="h-24 w-24 rounded-full object-cover" src="https://placehold.co/100x100/EFEFEF/333333?text=AM" alt="Foto profil M. Agung Maulana">
                <h3 class="mt-4 text-xl font-bold text-gray-900 dark:text-gray-100">M. Agung Maulana</h3>
                <p class="mt-1 text-gray-600 dark:text-gray-400">Web Developer</p>
                <div class="mt-4 flex space-x-5">
                    <a href="https://github.com/AgungSukaAFK" target="_blank" class="text-gray-500 dark:text-gray-400 hover:text-indigo-500 dark:hover:text-indigo-400 flex items-center gap-2">
                        <i data-lucide="github" class="w-5 h-5"></i>
                        <span>AgungSukaAFK</span>
                    </a>
                    <a href="https://aogung.com" target="_blank" class="text-gray-500 dark:text-gray-400 hover:text-indigo-500 dark:hover:text-indigo-400 flex items-center gap-2">
                         <i data-lucide="globe" class="w-5 h-5"></i>
                        <span>aogung.com</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
