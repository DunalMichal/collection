document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.getElementsByClassName("sliderAutomatic");

    Array.from(sliders).forEach((slider) => {
        // Pobierz rodzica i w nim znajdź kontener kropek
        const sliderWrapper = slider.parentElement;
        const dotsContainer = sliderWrapper.querySelector(".dots-container");
        console.log("Dots container dla slidera:", dotsContainer);
        if (!dotsContainer) {
            console.error("Nie znaleziono kontenera na kropki przy sliderze", slider);
            return;
        }

        const slidesCount = slider.children.length;

        // Czyszczenie kropek na wypadek odświeżenia lub wielokrotnego wywołania
        dotsContainer.innerHTML = "";

        // Tworzymy kropki
        for (let i = 0; i < slidesCount; i++) {
            const dot = document.createElement("span");
            dot.classList.add("dot");
            if (i === 0) dot.classList.add("active");
            dotsContainer.appendChild(dot);

            dot.addEventListener("click", () => {
                currentSlide = i;
                updateSlider();
            });
        }

        let currentSlide = 0;

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 840}px)`;
            const dots = dotsContainer.querySelectorAll(".dot");
            dots.forEach((d, idx) => {
                d.classList.toggle("active", idx === currentSlide);
            });
        }

        setInterval(() => {
            currentSlide = (currentSlide + 1) % slidesCount;
            updateSlider();
        }, 4000);
    });
});