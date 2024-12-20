<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

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
          <li><a href="/divissions" class="hover:text-orange-800">Divisions</a></li>
          <li><a href="/contact" class="hover:text-orange-800 border-b-2 border-orange-600">Contact</a></li>
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
        <li><a href="/divissions" class="hover:text-orange-800">Divisions</a></li>
        <li><a href="/contact" class="hover:text-orange-800 border-b-2 border-orange-600">Contact</a></li>
        <li><a href="/galerry" class="hover:text-orange-800">Galerry</a></li>
        <li><a href="/dashboard" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Gabung</a></li>
      </ul>
    </nav>
  </header>
<!-- Home Section -->
<section class="bg-cover bg-center text-gray relative"
    style="background-image: url('images/background/contact-image.png'); height: 70vh; background-size: cover; background-attachment: fixed;">
    <!-- Lapisan putih dengan opacity -->
    <div class="absolute inset-0 bg-white bg-opacity-70"></div>

    <div class="relative h-full flex items-center justify-center">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 home-title animate__animated animate__zoomIn animate__delay-0.5s">
                Ingin bergabung dan berkembang bersama ORBIT?
            </h1>
            <p class="text-base sm:text-lg mt-2 home-description animate__animated animate__fadeIn animate__delay-1s animate__slow">
                Kami selalu terbuka untuk kolaborasi, pertanyaan, atau konsultasi seputar kegiatan di bidang VR, Cyber, dan Programming.
            </p>
            <p class="text-base sm:text-lg mt-2 home-description animate__animated animate__fadeInUp animate__delay-2s animate__slow">
                Jangan ragu untuk menghubungi kami melalui form di bawah ini atau melalui kontak yang tersedia.
            </p>
        </div>
    </div>
</section>


  <!-- Contact Form Section -->
  <section id="contact" class="py-16 bg-gray-50 relative overflow-hidden">
    <!-- Elemen dekoratif -->
    <div class="absolute -top-16 -left-16 w-48 h-48 bg-orange-600 rounded-full opacity-10 z-0"></div>
    <div class="absolute -bottom-16 -right-16 w-64 h-64 bg-gray-800 rounded-full opacity-5 z-0"></div>
    <!-- Form Kontak -->
    <div class="container mx-auto px-6 relative z-10">
      <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Hubungi Kami</h2>
        <form action="#" method="" class="space-y-6">
          <div class="flex flex-col space-y-1">
            <label for="name" class="text-gray-600">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-500 focus:outline-none" placeholder="Masukkan nama lengkap Anda" required>
          </div>
          <div class="flex flex-col space-y-1">
            <label for="email" class="text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-500 focus:outline-none" placeholder="Masukkan email Anda" required>
          </div>
          <div class="flex flex-col space-y-1">
            <label for="message" class="text-gray-600">Pesan</label>
            <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-500 focus:outline-none" placeholder="Tulis pesan Anda di sini" required></textarea>
          </div>
          <!-- Tombol Kirim Pesan -->
          <div class="flex justify-center">
            <button
              type="submit"
              class="bg-orange-500 text-white font-semibold rounded-md px-6 py-3 shadow-lg hover:shadow-xl hover:bg-orange-600  transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-orange-400">
              Kirim Pesan
            </button>
          </div>
        </form>
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