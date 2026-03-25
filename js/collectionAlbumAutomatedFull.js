
    document.addEventListener('DOMContentLoaded', function() {
    const pages = document.querySelectorAll('.album-page');
    const btnPrev = document.querySelector('.prev-page');
    const btnNext = document.querySelector('.next-page');
    const btnFirst = document.querySelector('.first-page');
    const btnLast = document.querySelector('.last-page');
    const btnCategory = document.querySelector('.category');
    let currentPage = 0;

    function showPage(index) {
    // ukrywamy wszystkie strony
    pages.forEach(p => p.classList.remove('active', 'visible'));

    if (index === 0) {
    // pierwsza strona pojedyncza
    pages[0].classList.add('active');
} else {
    // od drugiej strony w górę – pokazujemy dwie obok siebie
    pages[index].classList.add('visible');
    if (index + 1 < pages.length) {
    pages[index + 1].classList.add('visible');
}
}

    currentPage = index;
}

    // pokaż pierwszą stronę na start
    showPage(0);

    btnPrev.addEventListener('click', () => {
    if (currentPage > 1) {
    showPage(currentPage - 2); // cofa o dwie strony
} else {
    showPage(0); // do pierwszej strony
}
});

    btnNext.addEventListener('click', () => {
    if (currentPage === 0 && pages.length > 1) {
    showPage(1); // z pierwszej na rozkładówkę
} else if (currentPage + 2 < pages.length) {
    showPage(currentPage + 2); // przewiń o dwie
} else {
    showPage(pages.length - 2 >= 1 ? pages.length - 2 : 0); // ostatnie strony
}
});

    btnFirst.addEventListener('click', () => showPage(0));
    btnLast.addEventListener('click', () => {
    if (pages.length > 1) showPage(pages.length - 2);
});

    btnCategory.addEventListener('click', () => {
    alert('Tutaj możesz dodać wybór kategorii.');
});
});

