<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pakar Diagnosa Kerusakan Komputer</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-laptop-medical text-2xl"></i>
                <span class="font-bold text-xl">KomputerDiagnosa</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-blue-200 font-medium">Beranda</a>
                <a href="#" class="hover:text-blue-200 font-medium">Diagnosa</a>
                <a href="#" class="hover:text-blue-200 font-medium">Gejala</a>
                <a href="#" class="hover:text-blue-200 font-medium">Tentang</a>
                <a href="#" class="hover:text-blue-200 font-medium">Kontak</a>
            </div>
            <div class="md:hidden">
                <button class="text-white focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-12 bg-gradient-to-r from-blue-500 to-blue-700 text-white">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Sistem Pakar Diagnosa Kerusakan Komputer</h1>
                <p class="text-lg mb-6">Temukan solusi untuk masalah komputer Anda dengan cepat dan akurat menggunakan sistem pakar berbasis pengetahuan ahli.</p>
                <div class="flex space-x-4">
                    <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition duration-300">Mulai Diagnosa</a>
                    <a href="#" class="border border-white px-6 py-3 rounded-lg font-medium hover:bg-blue-600 transition duration-300">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="https://source.unsplash.com/random/600x400/?computer,repair" alt="Komputer Diagnosa" class="rounded-lg shadow-xl">
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Fitur Sistem Pakar</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-blue-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Diagnosa Cepat</h3>
                    <p class="text-gray-600">Dapatkan diagnosa kerusakan komputer Anda dalam hitungan menit berdasarkan gejala yang Anda masukkan.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Solusi Tepat</h3>
                    <p class="text-gray-600">Sistem akan memberikan solusi yang tepat dan langkah-langkah perbaikan yang dapat Anda lakukan sendiri.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Basis Pengetahuan</h3>
                    <p class="text-gray-600">Didukung oleh basis pengetahuan yang komprehensif dari para ahli komputer dan teknisi berpengalaman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Kerja Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Cara Kerja Sistem</h2>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-12">
                <div class="bg-white p-6 rounded-lg shadow-md text-center w-full md:w-1/4">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 text-2xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Pilih Gejala</h3>
                    <p class="text-gray-600">Pilih gejala kerusakan yang dialami komputer Anda dari daftar yang tersedia.</p>
                </div>
                <div class="hidden md:block text-blue-600 text-4xl">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center w-full md:w-1/4">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 text-2xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Proses Analisis</h3>
                    <p class="text-gray-600">Sistem akan menganalisis gejala dan mencocokkan dengan basis pengetahuan.</p>
                </div>
                <div class="hidden md:block text-blue-600 text-4xl">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center w-full md:w-1/4">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 text-2xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Dapatkan Solusi</h3>
                    <p class="text-gray-600">Terima hasil diagnosa dan solusi untuk memperbaiki kerusakan komputer Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Siap Mendiagnosa Komputer Anda?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Jangan biarkan masalah komputer menghambat produktivitas Anda. Gunakan sistem pakar kami sekarang!</p>
            <a href="#" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-blue-50 transition duration-300 inline-block">Mulai Diagnosa</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">KomputerDiagnosa</h3>
                    <p class="text-gray-400">Sistem pakar untuk diagnosa kerusakan komputer berbasis pengetahuan ahli.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Tautan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Diagnosa</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Gejala</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Tentang</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope"></i>
                            <span class="text-gray-400">info@komputerdiagnosa.com</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone"></i>
                            <span class="text-gray-400">+62 123 4567 890</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="text-gray-400">Jl. Komputer No. 123, Jakarta</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-2xl">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-2xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-2xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-2xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} KomputerDiagnosa. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>