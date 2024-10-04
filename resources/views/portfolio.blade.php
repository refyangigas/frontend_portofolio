<!-- resources/views/portfolio.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-gradient {
            background: linear-gradient(135deg, #ffffff 60%, #fff5f0 100%);
        }

        .profile-circle {
            position: relative;
        }

        .profile-circle::after {
            content: '';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 40px;
            height: 40px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Cpath d='M20 1L20 39' stroke='%23FF6B3D' stroke-width='2' stroke-dasharray='4 4'/%3E%3C/svg%3E") no-repeat;
            transform: rotate(45deg);
        }

        .dots-pattern {
            background-image: radial-gradient(#ccc 1px, transparent 1px);
            background-size: 10px 10px;
        }
    </style>
</head>

<body class="bg-gradient min-h-screen">
    <nav class="container mx-auto px-4 py-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 rounded-full overflow-hidden">
                    <img src="{{ asset('images/profiles.jpg') }}" alt="Profile"
                        class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold">Refyan Gigas</h2>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-orange-500">Tentang Saya</a>
                <a href="#" class="text-gray-600">Pengalaman</a>
                <a href="#" class="text-gray-600">Projek</a>
                <a href="#" class="text-gray-600">Skills</a>
                <a href="#" class="text-gray-600">Sertifikasi</a>
                <a href="#" class="text-gray-600">Kontak</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl font-bold text-gray-700 mb-4">Refyan Gigas</h1>
                <h2 class="text-2xl text-gray-500 mb-8">Manajemen Informatika</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Saya lulusan baru Diploma Manajemen Informatika yang tertarik bekerja di bidang Informasi khususnya
                    administrasi dan pengembangan website. Terbiasa menggunakan berbagai aplikasi seperti VSCode, XAMPP,
                    github, Microsoft Office atau Outlook. Disiplin dan mampu bekerja dengan baik dan maksimal dalam
                    tim. Pernah aktif dalam pengalaman proyek seperti pengembangan website TOSEPATU yang bergerak di
                    bidang jasa cuci sepatu, berperan sebagai asisten pelayanan selama magang.
                </p>
                <button
                    class="bg-orange-500 text-white px-8 py-3 rounded-lg hover:bg-orange-600 transition-colors flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span>Lihat Portofolio</span>
                </button>
            </div>
            <div class="relative">
                <div class="profile-circle bg-red-500 rounded-full overflow-hidden w-96 h-96 mx-auto relative z-10">
                    <img src="{{ asset('public/images/profiles.jpg') }}" alt="Profile Picture"
                        class="w-full h-full object-cover">
                </div>
                <div class="dots-pattern absolute top-10 right-10 w-32 h-32 opacity-50"></div>
            </div>
        </div>
    </main>
</body>

</html>
