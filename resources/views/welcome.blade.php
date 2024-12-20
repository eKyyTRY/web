<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
</head>
<style>
  /* Animasi fade-in */
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  /* Animasi zoom-in */
  @keyframes zoomIn {
    0% {
      transform: scale(0.5);
      opacity: 0;
    }

    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

  /* Animasi slide-up */
  @keyframes slideUp {
    0% {
      transform: translateY(50px);
      opacity: 0;
    }

    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  /* Menambahkan animasi pada setiap divisi */
  .animate-fadeIn {
    animation: fadeIn 1s ease-out forwards;
  }

  .animate-zoomIn {
    animation: zoomIn 1s ease-out forwards;
  }

  .animate-slideUp {
    animation: slideUp 1s ease-out forwards;
  }

  /* Efek hover translate dan shadow */
  .transition-all {
    transition: all 0.3s ease-in-out;
  }

  /* Hover scale dan shadow */
  .hover:scale-105 {
    transform: scale(1.05);
  }

  .hover:shadow-2xl {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .hover:translate-y-2 {
    transform: translateY(-8px);
  }

  /* Efek gambar hover scale */
  .transition-transform:hover {
    transform: scale(1.1);
  }

  @keyframes fadeInDown {
    0% {
      opacity: 0;
      transform: translateY(-20px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in-down {
    animation: fadeInDown 1.5s ease-out forwards;
  }

  .animate-fade-in-up {
    animation: fadeInUp 1.5s ease-out forwards;
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
          <li><a href="/" class="hover:text-orange-800 border-b-2 border-orange-600">Home</a></li>
          <li><a href="/about" class="hover:text-orange-800">About</a></li>
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
        <li><a href="/" class="hover:text-orange-800 border-b-2 border-orange-600">Home</a></li>
        <li><a href="/about" class="hover:text-orange-800">About</a></li>
        <li><a href="/divissions" class="hover:text-orange-800">Divisions</a></li>
        <li><a href="/contact" class="hover:text-orange-800">Contact</a></li>
        <li><a href="/galerry" class="hover:text-orange-800">Galerry</a></li>
        <li><a href="/dashboard" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Gabung</a></li>
      </ul>
    </nav>
  </header>
  <!-- Home Section -->
  <section class="bg-cover bg-center text-white" style="background-image: url('images/background/home-image.png'); height: 70vh;">
    <div class="bg-opacity-70 h-full flex items-center">
      <!-- Pastikan latar belakang tetap sama -->
      <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold home-title animate-fade-in-down">Selamat Datang di ORBIT</h1>
        <p class="text-lg mt-4 home-description animate-fade-in-up">Membangun generasi muda yang berfokus pada inovasi dan teknologi</p>
        <div class="mt-8 flex justify-center">
          <a href="/dashboard" class="bg-white text-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 home-button">Gabung Sekarang</a>
          <a href="/about" class="ml-4 bg-transparent border border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-orange-500 home-button">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section -->
  <section id="about" class="py-16 bg-gray-50 relative overflow-hidden">
    <!-- Elemen dekoratif lingkaran besar -->
    <div class="absolute -top-16 -left-16 w-48 h-48 bg-orange-600 rounded-full opacity-10 z-0"></div>
    <div class="absolute -bottom-16 -right-16 w-64 h-64 bg-gray-800 rounded-full opacity-5 z-0"></div>
    <!-- Elemen dekoratif di sisi kiri -->
    <div class="absolute left-0 top-0 h-full w-12 bg-gradient-to-b from-orange-500 to-transparent opacity-10 z-1"></div>

    <!-- Elemen dekoratif di sisi kanan -->
    <div class="absolute right-0 top-0 h-full w-12 bg-gradient-to-b from-transparent to-orange-500 opacity-10 z-1"></div>
    <!-- Kontainer utama -->
    <div class="container mx-auto px-6 text-center relative z-10">
      <h4 class="text-3xl font-bold about-title text-gray-600 animate__animated animate__fadeInLeft animate__delay-1s animate__slow">
        Extrakurikuler Yang Bergerak Di Bidang IT
      </h4>
      <p class="mt-4 text-gray-700 about-description animate__animated animate__fadeInRight animate__delay-2s animate__slow">
        Organisasi Basis IT yang berfokus pada 3 divisi utama: Programming, Cyber Security, dan Virtual Reality.
      </p>
    </div>
  </section>
  <!-- Ajakan Section -->
  <section id="about" class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-5 rounded-lg shadow-lg flex flex-col justify-between border border-orange-600">
          <h4 class="text-lg font-semibold text-gray-800 animate__animated animate__fadeIn">
            Apakah Anda ingin bergabung bersama ORBIT untuk mengembangkan keterampilan IT?
          </h4>
          <p class="mt-2 text-gray-600 animate__animated animate__fadeIn animate__delay-1s">
            Kami siap memberikan layanan dan solusi inovatif untuk membantu Anda mengasah kemampuan di tiga divisi ini, serta mendukung pengembangan proyek-proyek teknologi yang menarik.
          </p>
          <a href="/contact" class="mt-4 bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold text-center hover:bg-orange-700 flex items-center justify-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0=" 2.25" />
            </svg>
            <span>Hubungi Kami</span>
          </a>
        </div>
        <div class="bg-white p-5 rounded-lg shadow-lg flex flex-col justify-between border border-gray-800">
          <h4 class="text-lg font-semibold text-gray-800 animate__animated animate__fadeIn">
            Apakah Anda tertarik untuk bergabung bersama ORBIT dan meningkatkan kemampuan di bidang IT?
          </h4>
          <p class="mt-2 text-gray-600 animate__animated animate__fadeIn animate__delay-1s">
            Kami menyediakan peluang untuk belajar dan berkolaborasi dalam pengembangan teknologi yang dapat memperkaya pengalaman dan keterampilan Anda di bidang IT.
          </p>
          <a href="/contact" class="mt-4 bg-gray-800 text-white px-4 py-2 rounded-lg font-semibold text-center hover:bg-gray-700 flex items-center justify-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0=" 2.25" />
            </svg>
            <span>Hubungi Kami</span>
          </a>
        </div>
      </div>
    </div>
  </section><!-- Tentang 2 Section -->
  <section id="about" class="py-12 bg-gray-50 relative overflow-hidden">
    <!-- Elemen dekoratif lingkaran besar -->
    <div class="absolute -top-16 -left-16 w-48 h-48 bg-orange-600 rounded-full opacity-10"></div>
    <div class="absolute -bottom-16 -right-16 w-64 h-64 bg-gray-800 rounded-full opacity-5"></div>

    <!-- Kontainer utama -->
    <div class="container mx-auto px-6 flex justify-center overflow-hidden">
      <div class="bg-white p-8 rounded-lg shadow-xl flex flex-col items-center text-left max-w-4xl w-full relative z-10 border border-gray-200">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-6 w-full">
          <!-- Deskripsi tentang organisasi -->
          <div class="flex-1 animate__animated animate__fadeInUp animate__slow">
            <h4 class="text-2xl font-semibold text-orange-600 mb-4">Tentang Organisasi Basis IT</h4>
            <p class="text-gray-700 text-base leading-relaxed mb-4">
              Organisasi Basis IT berfokus pada pengembangan keterampilan di bidang teknologi dengan tiga divisi utama: Virtual Reality, Cyber Security, dan Programming.
              Kami mendukung anggota untuk berkembang melalui proyek-proyek teknologi yang inovatif dan menantang.
            </p>
            <a href="/about" class="inline-flex items-center bg-orange-600 text-white px-2 py-1 rounded-lg font-semibold text-sm hover:bg-orange-700 transition duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <span>Selengkapnya</span>
            </a>
          </div>
          <!-- Gambar tim organisasi dengan efek overlay -->
          <div class="flex-1 relative animate__animated animate__fadeInRight animate__delay-1s">
            <div class="relative overflow-hidden rounded-lg shadow-lg">
              <img src="{{ asset('images/dokumentasi/dokumentasi-1.png') }}" alt="Tim Organisasi" class="w-full h-auto object-cover">
              <div class="absolute inset-0 bg-black bg-opacity-30 transition duration-300 hover:bg-opacity-50"></div>
              <!-- Ikon overlay -->
              <div class="absolute inset-0 flex justify-center items-center text-white opacity-0 hover:opacity-100 transition duration-300">
                <i class="fas fa-info-circle text-4xl"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="divisions" class="py-12 bg-gray-100">
    <div class="container mx-auto">
      <h3 class="text-3xl font-bold text-center text-gray-800 mb-6">Divisi- divisi Kami</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Divisi Programming dengan animasi fade-in -->
        <div class="bg-white shadow-xl rounded-lg p-6 text-center border border-gray-300 opacity-0 animate-fadeIn">
          <div class="w-36 h-36 rounded-full overflow-hidden mx-auto mb-4 transition-transform duration-500 transform hover:scale-110">
            <img src="images/logo/prog.png" alt="Programming" class="w-full h-full object-cover">
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Programming</h4>
          <p class="text-gray-600 mb-4">Membangun solusi perangkat lunak inovatif.</p>
          <a href="/divissions" class="inline-flex items-center bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold text-sm hover:bg-orange-700 transition duration-300 transform hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span>Selengkapnya</span>
          </a>
        </div>
        <!-- Divisi Cyber Security dengan animasi zoom-in -->
        <div class="bg-white shadow-xl rounded-lg p-6 text-center border border-gray-300 opacity-0 animate-zoomIn">
          <div class="w-36 h-36 rounded-full overflow-hidden mx-auto mb-4 transition-transform duration-500 transform hover:scale-110">
            <img src="images/logo/cyber.png" alt="Cyber Security" class="w-full h-full object-cover">
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Cyber Security</h4>
          <p class="text-gray-600 mb-4">Melindungi sistem dan data dari ancaman digital.</p>
          <a href="/divissions" class="inline-flex items-center bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold text-sm hover:bg-orange-700 transition duration-300 transform hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span>Selengkapnya</span>
          </a>
        </div>
        <!-- Divisi Virtual Reality dengan animasi slide-up -->
        <div class="bg-white shadow-xl rounded-lg p-6 text-center border border-gray-300 opacity-0 animate-slideUp">
          <div class="w-36 h-36 rounded-full overflow-hidden mx-auto mb-4 transition-transform duration-500 transform hover:scale-110">
            <img src="images/logo/vr1.png" alt="Virtual Reality" class="w-full h-full object-cover">
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Virtual Reality</h4>
          <p class="text-gray-600 mb-4">Menciptakan pengalaman VR untuk pendidikan.</p>
          <a href="/divissions" class="inline-flex items-center bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold text-sm hover:bg-orange-700 transition duration-300 transform hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span>Selengkapnya</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio Section -->
  <section id="portofolio" class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold">Portofolio Kami</h2>
      <p class="mt-4 text-gray-600">Lihat hasil karya terbaik dari anggota ORBIT dalam berbagai proyek teknologi.</p>
      <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Project 1: Website CTF -->
        <div
          class="bg-white shadow-md rounded-lg p-6 transition-transform duration-500 transform hover:scale-105 hover:shadow-xl">
          <img src="images/logo/ctf.png" alt="Website CTF"
            class="mx-auto mb-4 rounded-md transition-transform duration-500 transform hover:scale-110">
          <h3 class="text-xl font-semibold">Pembuatan Website CTF</h3>
          <p class="mt-2 text-gray-600">Sebuah platform CTF untuk belajar dan berkompetisi dalam dunia keamanan siber.
          </p>
          <a href="#" class="block mt-4 text-orange-500 hover:underline">Lihat Proyek</a>
        </div>
        <!-- Project 2: LMS ORBIT -->
        <div
          class="bg-white shadow-md rounded-lg p-6 transition-transform duration-500 transform hover:scale-105 hover:shadow-xl">
          <img src="images/logo/lms.jpg" alt="LMS ORBIT"
            class="mx-auto mb-4 rounded-md transition-transform duration-500 transform hover:scale-110">
          <h3 class="text-xl font-semibold">Pembuatan LMS ORBIT</h3>
          <p class="mt-2 text-gray-600">Sistem manajemen pembelajaran untuk mendukung kegiatan edukasi anggota.</p>
          <a href="#" class="block mt-4 text-orange-500 hover:underline">Lihat Proyek</a>
        </div>
        <!-- Project 3: Virtual Reality Showcase -->
        <div
          class="bg-white shadow-md rounded-lg p-6 transition-transform duration-500 transform hover:scale-105 hover:shadow-xl">
          <img
            src="images/logo/vr.png" alt="VR ORBIT"
            alt="Virtual Reality Showcase"
            class="mx-auto mb-4 rounded-md transition-transform duration-500 transform hover:scale-110">
          <h3 class="text-xl font-semibold">Virtual Reality Showcase</h3>
          <p class="mt-2 text-gray-600">Pameran virtual reality yang menampilkan karya-karya inovatif dari anggota
            divisi VR.</p>
          <a href="#" class="block mt-4 text-orange-500 hover:underline">Lihat Proyek</a>
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
    });
</script>

</html>