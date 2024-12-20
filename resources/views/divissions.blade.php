<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<style>
  /* Paralaks effect on scroll */
  section.bg-cover {
    transition: background-position 0.3s ease-in-out;
  }

  section.bg-cover:hover {
    background-position: center top;
  }

  /* Smooth fade-in effect */
  @keyframes fadeInSlow {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate__fadeInUp {
    animation: fadeInSlow 2s ease-in-out forwards;
  }

  /* Slow effect for scroll */
  .home-title,
  .home-description {
    opacity: 0;
  }

  .home-title.animate__fadeInUp,
  .home-description.animate__fadeInUp {
    opacity: 1;
  }

  /* Hover Effect */
  .hover\:scale-105:hover {
    transform: scale(1.05);
  }

  /* Smooth Transition */
  .transition {
    transition: all 0.3s ease-in-out;
  }
</style>

<body class="bg-gray-100 text-gray-800">
  <header class="bg-white text-gray-800 py-4 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
      <h1>
        <img src="{{ asset('images/logo/logo_orbit.png') }}" alt="Logo" class="w-24 h-auto">
      </h1>
      <!-- Navbar untuk desktop -->
      <nav class="hidden md:block">
        <ul class="flex space-x-4">
          <li><a href="/" class="hover:text-orange-800">Home</a></li>
          <li><a href="/about" class="hover:text-orange-800">About</a></li>
          <li><a href="/divissions" class="hover:text-orange-800 border-b-2 border-orange-600">Divisions</a></li>
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
        <li><a href="/about" class="hover:text-orange-800">About</a></li>
        <li><a href="/divissions" class="hover:text-orange-800 border-b-2 border-orange-600">Divisions</a></li>
        <li><a href="/contact" class="hover:text-orange-800">Contact</a></li>
        <li><a href="/galerry" class="hover:text-orange-800">Galerry</a></li>
        <li><a href="/dashboard" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Gabung</a></li>
      </ul>
    </nav>
  </header>
  <!-- Home Section -->
  <section class="bg-cover bg-center text-white relative overflow-hidden"
    style="background-image: url('images/background/devissions-image.png'); height: 70vh; background-size: cover; background-attachment: fixed;">
    <!-- Gradient Overlay for Better Contrast -->
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-70"></div>

    <div class="relative h-full flex items-center justify-center">
      <div class="container mx-auto px-4 text-center">
        <!-- Animated Title -->
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white home-title animate__animated animate__fadeInUp animate__slow animate__delay-0.5s">
          Temukan Potensi Tanpa Batas
        </h1>
        <!-- Animated Description -->
        <p class="text-lg sm:text-xl mt-4 home-description animate__animated animate__fadeInUp animate__slow animate__delay-1s">
          Bergabunglah bersama kami di Divisi ORBIT, tempat di mana teknologi dan kreativitas bertemu. Kami mengembangkan solusi inovatif melalui tiga divisi unggulan, mendukung pertumbuhan dan kesuksesan bersama.
        </p>
      </div>
    </div>
  </section>
  <!-- Divisi Section -->
  <section class="bg-gradient-to-b from-gray-50 to-gray-200 py-16 relative overflow-hidden">
    <div class="container mx-auto px-6">
      <!-- Section Title -->
      <h2 class="text-4xl font-semibold text-center text-gray-900 mb-8 animate__animated animate__fadeInUp animate__delay-0.5s transition-all duration-1000 ease-in-out">
        Divisi ORBIT
      </h2>
      <!-- Divisi Overview -->
      <div class="mb-12 text-center">
        <p class="text-lg text-gray-600 max-w-3xl mx-auto animate__animated animate__fadeInUp animate__delay-1.5s transition-all duration-1000 ease-in-out">
          Bergabunglah dengan Divisi ORBIT yang fokus pada <span class="font-semibold text-indigo-600">Cyber Security</span>,
          <span class="font-semibold text-indigo-600">Programming</span>, dan
          <span class="font-semibold text-indigo-600">Virtual Reality</span>. Belajar dengan pengalaman langsung yang menarik dan inovatif.
        </p>
      </div>
      <!-- Side Decorative Elements (Modern Version) -->
      <div class="absolute top-[-10%] left-[-10%] w-32 h-32 bg-indigo-200 rounded-full animate__animated animate__fadeIn animate__delay-2s sm:w-24 sm:h-24 sm:left-[-20%] sm:top-[-20%]"></div>
      <div class="absolute bottom-[-10%] right-[-10%] w-40 h-40 bg-indigo-300 rounded-full animate__animated animate__fadeIn animate__delay-2s sm:w-32 sm:h-32 sm:right-[-20%] sm:bottom-[-20%]"></div>
    </div>
  </section>
  <!-- Divisi Cards with Modern Layout -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
    <!-- Cyber Security Divisi -->
    <div class="relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105 animate__animated animate__fadeInLeft">
      <div class="absolute top-[-20px] left-1/2 transform -translate-x-1/2 bg-orange-500 text-white w-16 h-16 flex items-center justify-center rounded-full shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </div>
      <h3 class="text-2xl font-semibold text-gray-800 mt-12 text-center">Cyber Security</h3>
      <p class="text-gray-600 mt-4 text-center">Melindungi data dan sistem dari ancaman siber dengan pelatihan dan praktik langsung.</p>
      <ul class="text-gray-600 text-sm mt-6 list-disc pl-6">
        <li>Dasar-dasar Keamanan Jaringan</li>
        <li>Analisis Malware</li>
        <li>Manajemen Risiko Siber</li>
        <li>Penetration Testing</li>
      </ul>
      <div class="mt-6 text-center">
        <button class="bg-orange-500 text-white py-2 px-4 rounded-full hover:bg-orange-600 transition">Pelajari Lebih Lanjut</button>
      </div>
    </div>
    <!-- Programming Divisi -->
    <div class="relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105 animate__animated animate__fadeInUp animate__delay-1s">
      <div class="absolute top-[-20px] left-1/2 transform -translate-x-1/2 bg-orange-500 text-white w-16 h-16 flex items-center justify-center rounded-full shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </div>
      <h3 class="text-2xl font-semibold text-gray-800 mt-12 text-center">Programming</h3>
      <p class="text-gray-600 mt-4 text-center">Mengembangkan perangkat lunak inovatif untuk mendukung berbagai kebutuhan teknologi.</p>
      <ul class="text-gray-600 text-sm mt-6 list-disc pl-6">
        <li>Algoritma dan Struktur Data</li>
        <li>Pengembangan Web Full-Stack</li>
        <li>Pemrograman Berorientasi Objek</li>
        <li>Manajemen Proyek Perangkat Lunak</li>
      </ul>
      <div class="mt-6 text-center">
        <button class="bg-orange-500 text-white py-2 px-4 rounded-full hover:bg-orange-600 transition">Pelajari Lebih Lanjut</button>
      </div>
    </div>
    <!-- Virtual Reality Divisi -->
    <div class="relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105 animate__animated animate__fadeInLeft animate__delay-2s">
      <!-- Lingkaran dengan Icon SVG -->
      <div class="absolute top-[-20px] left-1/2 transform -translate-x-1/2 bg-orange-500 text-white w-16 h-16 flex items-center justify-center rounded-full shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </div>
      <h3 class="text-2xl font-semibold text-gray-800 mt-12 text-center">Virtual Reality</h3>
      <p class="text-gray-600 mt-4 text-center">Menciptakan pengalaman virtual yang imersif untuk berbagai kebutuhan edukasi dan hiburan.</p>
      <ul class="text-gray-600 text-sm mt-6 list-disc pl-6">
        <li>Dasar-dasar Virtual Reality</li>
        <li>Pemodelan 3D</li>
        <li>Pengembangan Aplikasi VR</li>
        <li>Interaksi Manusia dan Komputer</li>
      </ul>
      <div class="mt-6 text-center">
        <button class="bg-orange-500 text-white py-2 px-4 rounded-full hover:bg-orange-600 transition">Pelajari Lebih Lanjut</button>
      </div>
    </div>
  </div>
  <!-- Decorative Element -->
  <div class="mt-16 flex justify-center">
    <div class="bg-gradient-to-r from-orange-600 via-orange-700 to-orange-800 h-1 w-48 rounded-full animate__animated animate__fadeIn"></div>
  </div>
  </div>
  </section>
  <!-- Struktur Organisasi -->
  <div class="mt-16">
    <h3 class="text-3xl font-bold text-center text-gray-900 mb-8 animate__animated animate__fadeInUp animate__delay-0.5s transition-all duration-1000 ease-in-out">
      Struktur Organisasi ORBIT
    </h3>
    <!-- Struktur Kartu Organisasi -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
      <!-- Ketua -->
      <div class="bg-white text-gray-900 p-6 rounded-lg shadow-xl border-2 border-gray-300 hover:shadow-2xl transition duration-300 transform hover:scale-105 text-center relative animate__animated animate__fadeInUp animate__delay-1s">
        <h4 class="text-2xl font-bold">Ketua</h4>
        <p class="mt-2">Mengawasi semua aktivitas dan memimpin organisasi.</p>
      </div>
      <!-- Wakil Ketua -->
      <div class="bg-white text-gray-900 p-6 rounded-lg shadow-xl border-2 border-gray-300 hover:shadow-2xl transition duration-300 transform hover:scale-105 text-center relative animate__animated animate__fadeInUp animate__delay-1.5s">
        <h4 class="text-2xl font-bold">Wakil Ketua</h4>
        <p class="mt-2">Mendampingi ketua dan mengelola operasional harian.</p>
      </div>
      <!-- Sekretaris 1 -->
      <div class="bg-white text-gray-900 p-6 rounded-lg shadow-xl border-2 border-gray-300 hover:shadow-2xl transition duration-300 transform hover:scale-105 text-center relative animate__animated animate__fadeInUp animate__delay-2s">
        <h4 class="text-2xl font-bold">Sekretaris 1</h4>
        <p class="mt-2">Bertanggung jawab dalam pengelolaan administrasi dan surat menyurat.</p>
      </div>
      <!-- Sekretaris 2 -->
      <div class="bg-white text-gray-900 p-6 rounded-lg shadow-xl border-2 border-gray-300 hover:shadow-2xl transition duration-300 transform hover:scale-105 text-center relative animate__animated animate__fadeInUp animate__delay-2.5s">
        <h4 class="text-2xl font-bold">Sekretaris 2</h4>
        <p class="mt-2">Membantu dalam pengelolaan data dan pencatatan kegiatan.</p>
      </div>
      <!-- Bendahara 1 -->
      <div class="bg-white text-gray-900 p-6 rounded-lg shadow-xl border-2 border-gray-300 hover:shadow-2xl transition duration-300 transform hover:scale-105 text-center relative animate__animated animate__fadeInUp animate__delay-3s">
        <h4 class="text-2xl font-bold">Bendahara 1</h4>
        <p class="mt-2">Mengelola keuangan dan pembukuan organisasi.</p>
      </div>
      <!-- Bendahara 2 -->
      <div class="bg-white text-gray-900 p-6 rounded-lg shadow-xl border-2 border-gray-300 hover:shadow-2xl transition duration-300 transform hover:scale-105 text-center relative animate__animated animate__fadeInUp animate__delay-3.5s">
        <h4 class="text-2xl font-bold">Bendahara 2</h4>
        <p class="mt-2">Membantu dalam pengelolaan dana dan anggaran organisasi.</p>
      </div>
      <!-- Tim Media -->
      <div class="bg-white text-gray-900 p-8 rounded-lg shadow-xl border-2 border-gray-300 hover:shadow-2xl transition-all duration-500 transform hover:scale-110 text-center relative lg:col-span-3 mt-8 mb-12 animate__animated animate__fadeInUp animate__delay-4s">
        <div class="absolute inset-0 bg-white opacity-30 rounded-lg"></div>
        <div class="relative z-10">
          <h4 class="text-3xl font-bold text-gray-900 mb-4">Tim Media</h4>
          <p class="text-lg text-gray-900 mb-4">Bertanggung jawab atas dokumentasi dan publikasi kegiatan.</p>
          <a href="/galerry" class="inline-block text-lg font-semibold text-white py-2 px-4 rounded-full bg-orange-500 hover:bg-orange-600 transition-all duration-300">Lihat Galerry</a>
        </div>
      </div>
    </div>
  </div>
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
  });
</script>

</html>