console.log("view 1 2 3", document.querySelectorAll('.view_switcher'));
document.querySelectorAll('.view_switcher').forEach(switcher => {
    const buttons = switcher.querySelectorAll('.view_switcher-button');
    const views = document.querySelectorAll('.cards-view');

    const activate = (view) => {

        // 1️⃣ Ustaw aktywny przycisk
        buttons.forEach(btn => {
            btn.classList.toggle('active', btn.dataset.view === view);
        });

        // 2️⃣ Pokaż tylko wybrany widok
        views.forEach(v => v.classList.remove('active'));
        const currentView = document.querySelector('.cards-view--' + view);
        if (currentView) currentView.classList.add('active');
    };

    // 4️⃣ Dodaj event listener do przycisków
    buttons.forEach(btn => {
        btn.addEventListener('click', () => activate(btn.dataset.view));
    });

    // 5️⃣ Aktywacja przy ładowaniu strony
    const savedView = switcher.dataset.default;
    activate(savedView);
});