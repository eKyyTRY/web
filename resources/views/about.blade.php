<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<style>
    /* Custom shape untuk Angkatan 5 */
    .custom-shape {
        width: 300px;
        height: 300px;
        border-radius: 50% 20% / 30% 50%;
        clip-path: polygon(50% 0%, 80% 30%, 100% 70%, 60% 100%, 30% 90%, 0% 60%, 10% 20%);
        display: flex;
        justify-content: center;
        align-items: center;
        transform: rotate(-2deg);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-shape:hover {
        transform: rotate(0deg) scale(1.05);
        box-shadow: 0 20px 40px rgba(0, 255, 200, 0.3);
    }

    /* Responsif untuk ukuran lebih kecil */
    @media (max-width: 768px) {
        .custom-shape {
            width: 200px;
            height: 200px;
        }

        .custom-shape .text-lg {
            font-size: 0.9rem;
        }
    }

    @keyframes zoomIn {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes slideUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-zoom-in {
        animation: zoomIn 1.2s ease-out forwards;
    }

    .animate-slide-up {
        animation: slideUp 1.2s ease-out forwards;
    }
</style>

<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white text-gray-800 py-4 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <h1>
                <img src="{{ asset('images/logo/logo_orbit.png') }}" alt="Logo" class="w-24 h-auto">

            </h1>

            <!-- Navbar untuk desktop -->
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-orange-800">Home</a></li>
                    <li><a href="/about" class="hover:text-orange-800 border-b-2 border-orange-600">About</a></li>
                    <li><a href="/divissions" class="hover:text-orange-800">Divisions</a></li>
                    <li><a href="/contact" class="hover:text-orange-800">Contact</a></li>
                    <li><a href="/galerry" class="hover:text-orange-800">Galerry</a></li>
                    <li><a href="/dashboard" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Gabung</a></li>
                </ul>
            </nav>

            <!-- Hamburger Menu untuk mobile -->
            <div class="md:hidden">
                <button id="hamburger" class="text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Mobile -->
        <nav id="mobileMenu" class="md:hidden hidden bg-white shadow-lg">
            <ul class="flex flex-col space-y-4 p-4">
                <li><a href="/" class="hover:text-orange-800">Home</a></li>
                <li><a href="/about" class="hover:text-orange-800 border-b-2 border-orange-600">About</a></li>
                <li><a href="/divissions" class="hover:text-orange-800">Divisions</a></li>
                <li><a href="/contact" class="hover:text-orange-800">Contact</a></li>
                <li><a href="/galerry" class="hover:text-orange-800">Galerry</a></li>
                <li><a href="/dashboard" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Gabung</a></li>
            </ul>
        </nav>
    </header>
    <!-- Home Section -->
    <section class="bg-cover bg-center text-white relative"
        style="background-image: url('images/background/about-image.png'); height: 70vh; background-size: cover; background-attachment: fixed;">
        <!-- Gradient Overlay for Better Contrast -->
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-70"></div>

        <div class="relative h-full flex items-center justify-center">
            <div class="container mx-auto px-4 text-center">
                <!-- Adding scroll animation for title -->
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white home-title animate__animated animate__fadeInUp animate__slow animate__delay-0.5s">
                    Bergabung Dengan Kami Dalam Organisasi Basis IT
                </h1>
                <!-- Adding scroll animation for description -->
                <p class="text-lg sm:text-xl mt-4 home-description animate__animated animate__fadeInUp animate__delay-1s">
                    Ekstrakurikuler di SMKN 1 Ngawi yang Berfokus Pada Pengembangan Keahlian di Bidang Teknologi Informasi untuk Membangun Masa Depan
                </p>
            </div>
        </div>
    </section>
    <!-- Next Section -->
    <section class="py-12 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 text-center relative z-10">
            <!-- Elemen dekoratif dengan pattern dan efek blur -->
            <div class="absolute top-0 left-0 w-48 h-48 bg-orange-400 rounded-full opacity-10 z-0 blur-xl"></div>
            <div class="absolute bottom-0 right-0 w-48 h-48 bg-gray-700 rounded-full opacity-15 z-0 blur-xl"></div>

            <!-- Judul dan Deskripsi dengan animasi fade -->
            <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                Apa Yang Kami Tawarkan
            </h2>
            <p class="text-base sm:text-lg text-gray-600 mx-auto max-w-2xl mb-6 animate__animated animate__fadeInUp animate__delay-1.5s">
                Kami menyediakan berbagai macam kegiatan, pelatihan, dan acara dalam bidang teknologi informasi dan inovasi digital.
            </p>

            <!-- Link dengan tombol lebih stylish -->
            <div class="flex justify-center space-x-6 animate__animated animate__fadeInUp animate__delay-2s z-10 relative">
                <a href="#" class="inline-block bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transform transition duration-300 ease-in-out hover:bg-orange-700 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-orange-500 focus:ring-opacity-50">
                    Pelatihan
                </a>
                <a href="#" class="inline-block bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transform transition duration-300 ease-in-out hover:bg-orange-700 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-orange-500 focus:ring-opacity-50">
                    Seminar
                </a>
                <a href="#" class="inline-block bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transform transition duration-300 ease-in-out hover:bg-orange-700 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-orange-500 focus:ring-opacity-50">
                    Acara
                </a>
            </div>
        </div>
    </section>
    <main class="py-6 bg-gray-900">
        <div class="container mx-auto px-6 lg:px-12">
            <!-- Bagian Tentang Kami -->
            <section id="about" class="mb-16">
                <div class="text-center mb-10">
                    <h2 class="text-4xl font-extrabold text-white mb-4 animate__animated animate__fadeInDown">
                        Tentang Kami
                    </h2>
                    <p class="text-lg text-gray-300 animate__animated animate__fadeInUp animate__delay-1s">
                        Kami adalah organisasi yang berkomitmen pada inovasi, teknologi, dan pengembangan kemampuan di dunia IT.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Kiri - Profil -->
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-transform duration-300 hover:scale-105 animate-zoom-in">
                        <h3 class="text-2xl font-semibold text-orange-200 mb-4">Profil</h3>
                        <p class="text-gray-300">
                            Organisasi IT SMKN 1 Ngawi berdiri pada 11 Februari 2022. Kami bergerak di bidang Virtual Reality,
                            Cybersecurity, dan Programming. Dengan semangat kolaborasi, kami terus menciptakan solusi inovatif
                            untuk menghadapi tantangan dunia teknologi.
                        </p>
                    </div>
                    <!-- Kanan - Visi & Misi -->
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-transform duration-300 hover:scale-105 animate-slide-up">
                        <h3 class="text-2xl font-semibold text-orange-200 mb-4">Visi & Misi</h3>
                        <p class="text-gray-300">
                            <strong>Visi:</strong> No Limit No Boundaries. <br><br>
                            <strong>Misi:</strong> Mengembangkan inovasi berbasis teknologi, memperkuat kolaborasi,
                            dan membangun talenta masa depan.
                        </p>
                    </div>
                </div>
        </div>
        </section>
        </div>
    </main>
    <!-- Bagian Angkatan Orbit -->
    <section id="angkatan-orbit" class="py-12 bg-gray-100">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-4xl font-extrabold text-center text-gray mb-6 animate__animated animate__fadeInDown">
                Angkatan ORBIT
            </h2>
            <p class="text-lg text-center text-gray max-w-3xl mx-auto animate__animated animate__fadeInUp animate__delay-1s">
                Hingga saat ini, organisasi kami telah memiliki
                <span id="angkatan-terkini" class="font-bold text-teal-400"></span>.
            </p>
            <!-- Kotak papan untuk angkatan terkini -->
            <div id="angkatan-box" class="flex justify-center items-center mt-10">
                <div class="custom-shape static-layout bg-gradient-to-br from-orange-500 to-cyan-600 shadow-xl">
                    <div class="relative z-10 text-center px-6 py-10">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="orbit-timer" class="bg-gradient-to-r from-gray-700 to-gray-900 text-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-extrabold mb-4 animate__animated animate__fadeInUp">ORBIT Telah Berjalan</h2>
            <p class="text-xl mb-8 animate__animated animate__fadeInUp animate__delay-1s">
                Sejak <span id="start-date" class="font-semibold">11 Februari 2022</span>, ORBIT telah berjalan selama:
            </p>
            <div class="inline-block bg-white text-orange-600 rounded-lg shadow-lg px-6 py-4 text-5xl font-bold animate__animated animate__fadeInUp animate__delay-2s">
                <span id="days-count">0</span> Hari
            </div>
            <p class="text-lg mt-6 animate__animated animate__fadeInUp animate__delay-3s">
                Terus berkembang dan meraih prestasi baru setiap harinya!
            </p>
        </div>
    </section>
    <section id="prestasi" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-8 animate__animated animate__fadeInUp">
                Prestasi Kami
            </h2>
            <p class="text-lg text-center text-gray-600 max-w-3xl mx-auto mb-12 animate__animated animate__fadeInUp animate__delay-1s">
                Kami bangga dengan pencapaian kami yang terus berkembang. Beberapa penghargaan dan proyek penting yang telah kami raih termasuk:
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:scale-105 transform transition-all duration-300">
                    <svg class="w-12 h-12 mx-auto text-orange-500 mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 0v12m0 0l6-6m-6 6l-6-6"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-800">Finalis ARA 2022</h3>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:scale-105 transform transition-all duration-300">
                    <svg class="w-12 h-12 mx-auto text-orange-500 mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 0v12m0 0l6-6m-6 6l-6-6"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-800">Proyek Pengembangan Web ORBIT</h3>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:scale-105 transform transition-all duration-300">
                    <svg class="w-12 h-12 mx-auto text-orange-500 mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 0v12m0 0l6-6m-6 6l-6-6"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-800">Projek Capture The Flag</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- About Section -->
            <div class="p-4">
                <h2 class="text-lg font-bold">Organisasi Basis IT</h2>
                <p class="mt-3 text-gray-300 text-justify leading-relaxed">
                    Organisasi Basis IT didirikan pada 11 Februari 2022. Extrakurikuler berdedikasi untuk menyediakan solusi dalam Cyber Security, Pemrograman, dan Virtual Reality. Kami berupaya mendobrak hambatan dan melampaui batas dengan keahlian dan inovasi kami.
                </p>
                <div class="flex mt-4 space-x-3">
                    <!-- Social Media Icons -->
                    <a href="https://wa.me/yourwhatsappnumber" class="hover:opacity-80">
                        <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp" class="w-8 h-8">
                    </a>
                    <a href="https://www.instagram.com/yourinstagramhandle" class="hover:opacity-80">
                        <img src="https://img.icons8.com/color/48/000000/instagram-new.png" alt="Instagram" class="w-8 h-8">
                    </a>
                    <a href="https://www.youtube.com/youryoutubechannel" class="hover:opacity-80">
                        <img src="https://img.icons8.com/color/48/000000/youtube-play.png" alt="YouTube" class="w-8 h-8">
                    </a>
                </div>
            </div>
            <!-- Map Section -->
            <div class="p-4 flex justify-center items-center">
                <iframe
                    class="w-full md:w-3/4 h-40 border-0 rounded-md shadow-lg"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5746363810795!2d111.44138667592982!3d-7.401464392608571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79e7c5af82f985%3A0xeae5d5aad2ab3174!2sSMK%20Negeri%201%20Ngawi!5e0!3m2!1sen!2sid!4v1729302238814!5m2!1sen!2sid"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
            <!-- Contact Section -->
            <div class="p-4">
                <h2 class="text-lg font-bold">Kontak Kami</h2>
                <ul class="mt-3 text-gray-300 leading-relaxed">
                    <li>Telp: +62 123 455 655</li>
                    <li>Mobile: +62 812 345 678 (Orbit)</li>
                    <li>Email: info@orbiskansa.org</li>
                </ul>
                <h2 class="text-lg font-bold mt-5">Alamat</h2>
                <p class="mt-3 text-gray-300 leading-relaxed">
                    Jl. Teuku Umar No.10, Ketanggi, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63211
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer -->
    <footer class="text-white bg-orange-600 py-5">
        <div class="container mx-auto px-4 text-center">
            <p>Hak Cipta &copy; 2024 Organisasi Basis IT. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    }); // Tanggal mulai Orbit
    const startDate = new Date('2022-02-11'); // Tanggal 11 Februari 2022
    const currentDate = new Date(); // Tanggal saat ini    // Menghitung jumlah hari yang telah berlalu
    const timeDifference = currentDate - startDate; // Selisih waktu dalam milidetik
    const daysElapsed = Math.floor(timeDifference / (1000 * 3600 * 24)); // Menghitung jumlah hari    // Menampilkan hasil pada halaman
    document.getElementById('days-count').textContent = daysElapsed; // Variabel untuk menentukan angkatan terkini
    const startYear = 2019; // Tahun dimulainya organisasi
    const currentYear = new Date().getFullYear();
    const currentMonth = new Date().getMonth() + 1; // Bulan saat ini (1-12)
    let angkatanTerkini = currentYear - startYear; // Jika belum bulan Juli, kurangi 1 dari angkatan terkini
    if (currentMonth < 7) angkatanTerkini--; // Update teks jumlah angkatan terkini
    document.getElementById("angkatan-terkini").textContent = `${angkatanTerkini} Angkatan`; // Update konten kotak papan angkatan terkini
    const angkatanBox = document.getElementById("angkatan-box");
    if (angkatanTerkini === 5) {
        angkatanBox.innerHTML = `
        <div class="custom-shape shadow-2xl bg-gradient-to-br from-teal-500 to-cyan-600 relative">
            <div class="absolute inset-0 bg-teal-400 bg-opacity-10 rounded-full blur-lg"></div>
            <div class="relative z-10 text-center px-8 py-8">
                <h3 class="text-3xl font-extrabold text-white mb-2">A${angkatanTerkini}</h3>
                <p class="text-lg text-gray-100">Generasi Angkatan ORBIT!</p>
            </div>
        </div>
    `;
    }
</script>

</html>