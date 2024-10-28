let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach((slide) => {
        slide.classList.remove('show'); // Hilangkan kelas "show" dari semua gambar
    });
    slides[index].classList.add('show'); // Tambahkan kelas "show" ke gambar yang aktif
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides; // Loop ke gambar pertama setelah gambar terakhir
    showSlide(currentIndex);
}

showSlide(currentIndex); // Tampilkan slide pertama
setInterval(nextSlide, 3000); // Ganti gambar setiap 3 detik
