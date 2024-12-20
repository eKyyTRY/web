<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  @vite('resources/css/app.css')
</head>
<style>
  .filter-btn.active {
  background-color: #f97316; /* Warna orange */
  color: white;
}

.filter-btn:hover {
  background-color: #f97316; /* Hover juga berwarna orange */
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
          <li><a href="/about" class="hover:text-orange-800">About</a></li>
          <li><a href="/divissions" class="hover:text-orange-800">Divisions</a></li>
          <li><a href="/contact" class="hover:text-orange-800">Contact</a></li>
          <li><a href="/galerry" class="hover:text-orange-800 border-b-2 border-orange-600">Galerry</a></li>
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
        <li><a href="/contact" class="hover:text-orange-800">Contact</a></li>
        <li><a href="/galerry" class="hover:text-orange-800 border-b-2 border-orange-600">Galerry</a></li>
        <li><a href="/dashboard" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Gabung</a></li>
      </ul>
    </nav>
  </header>





<!-- Home Section -->
<section class="bg-cover bg-center text-gray relative" 
   style="background-image: url('images/background/galerry-image.png'); height: 70vh; background-size: cover; background-attachment: fixed;">
  <!-- Lapisan putih dengan opacity -->
  <div class="absolute inset-0 bg-white bg-opacity-70"></div>
  
  <div class="relative h-full flex items-center justify-center">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 home-title animate__animated animate__fadeIn animate__delay-0.5s animate__slow">
        Kumpulan Foto Dokumentasi Dari Berbagai Kegiatan ORBIT
      </h1>
      <p class="text-base sm:text-lg mt-2 home-description animate__animated animate__slideInUp animate__delay-1s animate__slow">
        Kami selalu terbuka untuk kolaborasi, pertanyaan, atau konsultasi seputar kegiatan di bidang VR, Cyber, dan Programming.
      </p>
      <p class="text-base sm:text-lg mt-2 home-description animate__animated animate__zoomIn animate__delay-2s animate__slow">
        Jangan ragu untuk menghubungi kami melalui form di bawah ini atau melalui kontak yang tersedia.
      </p>
    </div>
  </div>
</section>































<!-- Gallery Section -->
<section class="bg-gray-50 py-16">
  <div class="container mx-auto px-6">
    <!-- Section Title -->
    <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mb-12">
      Galeri ORBIT
    </h2>

<!-- Filter and Category Selector -->
<div class="flex justify-center mb-8">
  <button id="semua-btn" onclick="filterGallery('semua')" class="filter-btn bg-gray-300 text-gray-700 py-2 px-4 rounded-lg mr-4 hover:bg-gray-400  hover:text-white transition duration-300 ease-in-out">
    Semua
  </button>
  <button id="produk-btn" onclick="filterGallery('pelatihan')" class="filter-btn bg-gray-300 text-gray-700 py-2 px-4 rounded-lg mr-4 hover:bg-gray-400 hover:text-white transition duration-300 ease-in-out">
    Pelatihan
  </button>
  <button id="proyek-btn" onclick="filterGallery('seminar')" class="filter-btn bg-gray-300 text-gray-700 py-2 px-4 rounded-lg mr-4 hover:bg-gray-400 hover:text-white  transition duration-300 ease-in-out">
    Seminar
  </button>
  <button id="acara-btn" onclick="filterGallery('acara')" class="filter-btn bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400 hover:text-white transition duration-300 ease-in-out">
    Acara
  </button>
</div>

    <!-- Grid of Images -->
    <div id="gallery" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
      <!-- Gambar-gambar akan dimuat disini -->
      <div class="image-item acara">
        <img src="images/dokumentasi/acara-1.jpeg" alt="Gambar 1" class="w-full h-40 object-cover rounded-lg shadow-lg" onclick="openModal('images/dokumentasi/acara-1.jpeg')">
      </div>
      <div class="image-item pelatihan">
        <img src="images/dokumentasi/acara-2.png" alt="Gambar 2" class="w-full h-40 object-cover rounded-lg shadow-lg" onclick="openModal('images/dokumentasi/acara-2.png')">
      </div>
      <div class="image-item acara">
        <img src="path_to_your_image_3.jpg" alt="Gambar 3" class="w-full h-40 object-cover rounded-lg shadow-lg" onclick="openModal('path_to_your_image_3.jpg')">
      </div>
      <div class="image-item produk">
        <img src="path_to_your_image_4.jpg" alt="Gambar 4" class="w-full h-40 object-cover rounded-lg shadow-lg" onclick="openModal('path_to_your_image_4.jpg')">
      </div>
      <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
    </div>


</section>

<!-- Modal for Fullscreen Image View -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300">
  <div class="bg-white rounded-lg p-6 relative max-w-4xl">
    <span class="absolute top-0 right-0 p-4 text-xl font-bold text-gray-700 cursor-pointer" onclick="closeModal()">X</span>
    <img src="" id="modal-img" class="w-full h-auto rounded-lg">
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





    let currentPage = 1;
const imagesPerPage = 6;  // Jumlah gambar per halaman
const totalImages = 12;   // Jumlah gambar yang telah Anda masukkan

// Fungsi untuk memfilter kategori
function filterGallery(category) {
  const items = document.querySelectorAll('.image-item');
  items.forEach(item => {
    if (category === 'semua' || item.classList.contains(category)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}

// Fungsi untuk memuat gambar berdasarkan halaman
function loadImages(page) {
  const gallery = document.getElementById('gallery');
  const images = gallery.querySelectorAll('.image-item');
  
  // Menampilkan gambar yang sesuai dengan halaman yang dipilih
  let startIndex = (page - 1) * imagesPerPage;
  let endIndex = startIndex + imagesPerPage;

  images.forEach((image, index) => {
    if (index >= startIndex && index < endIndex) {
      image.style.display = 'block';
    } else {
      image.style.display = 'none';
    }
  });

  // Menyembunyikan tombol Next Page jika sudah mencapai halaman terakhir
  if (endIndex >= totalImages) {
    document.getElementById('pagination').style.display = 'none';
  }
}

// Fungsi untuk membuka modal
function openModal(imgSrc) {
  document.getElementById('modal-img').src = imgSrc;
  document.getElementById('modal').classList.remove('opacity-0', 'pointer-events-none');
  document.getElementById('modal').classList.add('opacity-100', 'pointer-events-auto');
}

// Fungsi untuk menutup modal
function closeModal() {
  document.getElementById('modal').classList.remove('opacity-100', 'pointer-events-auto');
  document.getElementById('modal').classList.add('opacity-0', 'pointer-events-none');
}

// Fungsi untuk mengubah halaman dan memuat gambar berikutnya
function nextPage() {
  currentPage++;
  loadImages(currentPage);
}

// Mulai memuat gambar pertama kali
loadImages(currentPage);
// Fungsi untuk memfilter kategori
function filterGallery(category) {
  const items = document.querySelectorAll('.image-item');
  items.forEach(item => {
    if (category === 'semua' || item.classList.contains(category)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });

  // Mengubah warna tombol yang dipilih
  const buttons = document.querySelectorAll('.filter-btn');
  buttons.forEach(button => {
    button.classList.remove('active');  // Menghapus kelas active dari semua tombol
  });

  // Menambahkan kelas active ke tombol yang dipilih
  const selectedButton = document.getElementById(category + '-btn');
  selectedButton.classList.add('active');
}


</script>
</html>






