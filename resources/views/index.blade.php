<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. PLN NUSANTARA</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    /* Mencegah scroll pada seluruh halaman */
    body,
    html {
        height: 100%;
        margin: 0;
        overflow: hidden;
    }

    /* Mengatur div utama agar tidak lebih tinggi dari layar */
    .main-content {
        height: 94%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    /* Styling navbar untuk tetap berada di atas */
    .navbar {
        position: relative;
        z-index: 10;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-indigo-500 h-14 navbar">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-14">
                <h1 class="text-white text-lg sm:text-xl font-bold">PT. PLN NUSANTARA</h1>
                <div class="flex items-center gap-4">
                    <div class="bg-gray-200 rounded-full w-8 h-8 flex items-center justify-center">
                        <span class="text-gray-600 text-xs sm:text-sm">Nama</span>
                    </div>
                </div>
            </div>
            <!-- Links Underneath -->
            <div class="mt-5 sm:mt-10 text-center">
                <a href="#"
                    class="text-white bg-indigo-500 px-4 py-2 sm:px-6 sm:py-2.5 rounded-md shadow-md hover:bg-indigo-600 text-sm sm:text-base">Form
                    Laporan</a>
                <a href="#"
                    class="text-white bg-indigo-500 px-4 py-2 sm:px-6 sm:py-2.5 rounded-md shadow-md hover:bg-indigo-600 ml-4 text-sm sm:text-base">Riwayat
                    Laporan</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="relative w-full h-full">
            <!-- Background Image -->
            <img src="/img/pln1.jpg" alt="Power Plant Background" class="w-full h-full object-cover">

            <!-- White Card Overlay -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div
                    class="bg-white rounded-lg p-6 sm:p-8 shadow-lg w-[80%] sm:w-[50%] md:w-[40%] lg:w-[30%] text-center">
                    <h2 class="text-xl sm:text-2xl font-bold mb-3">Form Laporan</h2>
                    <p class="text-gray-600 text-sm sm:text-base mb-4">Tekan tombol di bawah untuk membuat laporan</p>
                    <button class="bg-blue-500 text-white px-4 py-1.5 rounded text-sm sm:text-base hover:bg-blue-600">
                        + Buat Laporan
                    </button>
                </div>
            </div>

            <!-- Footer Logo -->
            <div class="absolute bottom-4 right-4 sm:bottom-6 sm:right-6">
                <img src="/img/pln2.jpg" alt="PLN Nusantara Power" class="h-6 sm:h-8">
            </div>
        </div>
    </div>
</body>

</html>