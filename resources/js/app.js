import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const html = document.documentElement;
  
    // Periksa apakah dark mode diaktifkan sebelumnya
    const isDarkModeActive = localStorage.getItem('darkMode') === 'true';
  
    // Setel status dark mode berdasarkan nilai sebelumnya
    if (isDarkModeActive) {
      html.classList.add('dark');
      darkModeToggle.checked = true;
    }
  
    // Fungsi untuk mengaktifkan atau menonaktifkan dark mode
    function toggleDarkMode() {
      if (html.classList.contains('dark')) {
        html.classList.remove('dark');
        localStorage.setItem('darkMode', 'false');
      } else {
        html.classList.add('dark');
        localStorage.setItem('darkMode', 'true');
      }
    }
  
    // Tambahkan event listener untuk toggle
    darkModeToggle.addEventListener('change', toggleDarkMode);
  
    // Nonaktifkan toggle saat halaman dimuat ulang
    darkModeToggle.disabled = true;
  
    // Tunggu hingga gambar latar belakang selesai dimuat
    const backgroundImage = new Image();
    backgroundImage.src = '/img/stars-night.gif';
    backgroundImage.onload = function() {
      // Aktifkan kembali toggle setelah gambar latar belakang selesai dimuat
      darkModeToggle.disabled = false;
    };
  });