<!DOCTYPE html>
<html lang="id" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AoBook')</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons via CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    
    {{--! Penting: Script untuk mencegah "flicker" saat ganti tema --}}
    <script>
        // Cek tema dari localStorage atau preferensi sistem, lalu terapkan class 'dark' ke <html>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          document.documentElement.classList.add('dark')
        } else {
          document.documentElement.classList.remove('dark')
        }

        // Konfigurasi Tailwind untuk dark mode
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>
{{-- Perubahan: Tambahkan class 'min-h-screen flex flex-col' --}}
<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md sticky top-0 z-10 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('books.index') }}" class="flex-shrink-0 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-indigo-600 dark:text-indigo-500"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        <span class="font-bold text-xl text-indigo-600 dark:text-indigo-500">AoBook</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="hidden md:flex items-baseline space-x-4">
                        <a href="{{ route('books.index') }}" class="{{ request()->routeIs('books.*') ? 'bg-indigo-50 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700' }} px-3 py-2 rounded-md text-sm font-medium transition-colors">Daftar Buku</a>
                        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'bg-indigo-50 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700' }} px-3 py-2 rounded-md text-sm font-medium transition-colors">Tentang AoBook</a>
                    </div>
                     <!-- Tombol Dark Mode Toggle -->
                    <button id="theme-toggle" type="button" class="ml-4 p-2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm transition-colors">
                        <span id="theme-toggle-sun-icon" class="hidden"><i data-lucide="sun" class="w-5 h-5"></i></span>
                        <span id="theme-toggle-moon-icon" class="hidden"><i data-lucide="moon" class="w-5 h-5"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    {{-- Perubahan: Tambahkan class 'flex-grow' --}}
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    {{-- Perubahan: Hapus class 'mt-12' karena tidak lagi diperlukan --}}
    <footer class="bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-500 dark:text-gray-400 text-sm">
            <p>Dibuat dengan ❤️ oleh <strong>M. Agung Maulana</strong></p>
            <div class="flex justify-center space-x-4 mt-2">
                <a href="https://github.com/AgungSukaAFK" target="_blank" class="hover:text-indigo-500">GitHub</a>
                <span>&bull;</span>
                <a href="https://aogung.com" target="_blank" class="hover:text-indigo-500">Tentang Developer</a>
            </div>
        </div>
    </footer>

    <script>
      // Inisialisasi ikon Lucide
      lucide.createIcons();
      
      // Logika untuk tombol ganti tema
      const themeToggleBtn = document.getElementById('theme-toggle');
      const sunIcon = document.getElementById('theme-toggle-sun-icon');
      const moonIcon = document.getElementById('theme-toggle-moon-icon');

      // Fungsi untuk mengatur ikon yang tampil
      const setVisibleIcon = () => {
        if (document.documentElement.classList.contains('dark')) {
          sunIcon.classList.remove('hidden');
          moonIcon.classList.add('hidden');
        } else {
          sunIcon.classList.add('hidden');
          moonIcon.classList.remove('hidden');
        }
      };

      // Tampilkan ikon yang sesuai saat halaman dimuat
      setVisibleIcon();

      themeToggleBtn.addEventListener('click', () => {
        // Toggle class 'dark' pada elemen <html>
        document.documentElement.classList.toggle('dark');
        
        // Simpan preferensi tema di localStorage
        if (document.documentElement.classList.contains('dark')) {
            localStorage.theme = 'dark';
        } else {
            localStorage.theme = 'light';
        }

        // Perbarui ikon yang tampil
        setVisibleIcon();
      });
    </script>
</body>
</html>
