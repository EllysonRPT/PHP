// public/app.js
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.carousel img');
    let currentSlide = 0;

    function showSlide(index) {
        slides[currentSlide].classList.remove('active');
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    setInterval(nextSlide, 3000); // Muda a imagem a cada 3 segundos

    showSlide(currentSlide);
});
