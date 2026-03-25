
    document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.dashboard-button');
    const sections = document.querySelectorAll('.tab-section');

    buttons.forEach(button => {
    button.addEventListener('click', () => {
    const tab = button.getAttribute('data-tab');

    // Ukryj wszystkie sekcje
    sections.forEach(s => s.style.display = 'none');

    // Pokaż wybraną
    const activeSection = document.getElementById('tab-' + tab);
    if (activeSection) activeSection.style.display = 'block';

    // Zmieniaj aktywny przycisk
    buttons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
});
});

    // Domyślnie pierwsza zakładka
    buttons[0].click();
});