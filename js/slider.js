const slides = document.querySelectorAll('.slider-automatic-image');
const sliderAutomatic = document.querySelector('.slider-automatic');
const dots = document.querySelectorAll('.dot');

let index = 0;

function showSlide(i) {
    const width = slides[0].clientWidth;
    sliderAutomatic.style.transform = `translateX(-${i * width}px)`;

    dots.forEach(dot => dot.classList.remove('active'));
    dots[i].classList.add('active');
}

function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide(index);
}

// automatyczna zmiana co 3 sekundy
setInterval(nextSlide, 3000);

// obsługa kliknięcia w kropki
dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
        index = i;
        showSlide(index);
    });
});