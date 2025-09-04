document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.getElementsByClassName("slider-automatic");

    if (sliders.length === 0) {
        console.error("Nie znaleziono elementów o klasie slider-automatic");
        return;
    }

    Array.from(sliders).forEach(slider => {
        if (!slider || !slider.children || slider.children.length === 0) {
            console.error("Slider jest niepoprawny lub nie ma dzieci:", slider);
            return;
        }

        let index = 0;
        const slides = slider.children;
        const slidesCount = slides.length;

        // ustawienie szerokości slidera na 100% dla każdego obrazka
        Array.from(slides).forEach(slide => {
            slide.style.flexShrink = "0";
            slide.style.width = "100%";
        });

        setInterval(() => {
            index = (index + 1) % slidesCount;
            slider.style.transform = `translateX(-${index * 100}%)`;
            slider.style.transition = "transform 0.5s ease-in-out";
        }, 4000);
    });
});