document.addEventListener('DOMContentLoaded', () => {
    // --- przycisk pokaż/ukryj sekcję ---
    const showMoreButton = document.getElementById('buttonSecondary');
    const moreSection = document.getElementById('moreSection');

    if (showMoreButton && moreSection) {
        showMoreButton.addEventListener('click', () => {
            moreSection.classList.toggle('visible');
            showMoreButton.textContent = moreSection.classList.contains('visible')
                ? '⬆️ Ukryj opis'
                : '📘 Więcej o kolekcji';
        });
    }

    // --- logika zakładek ---
    const tabs = document.querySelectorAll('.collection_moreInfo-hidden-tabs-tab');
    const tabContents = document.querySelectorAll('.collection_moreInfo-hidden-tabs-tab_content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // usuń aktywność ze wszystkich zakładek
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            // pokaż odpowiadającą treść
            const sel = tab.dataset.tab;
            tabContents.forEach(tc => tc.classList.remove('active'));
            const content = document.getElementById(sel);
            if (content) content.classList.add('active');
        });
    });

    // --- domyślnie pierwsza zakładka aktywna ---
    // if (tabs.length > 0 && tabContents.length > 0) {
    //     tabs[0].classList.add('active');
    //     tabContents[0].classList.add('active');
    // }
});
