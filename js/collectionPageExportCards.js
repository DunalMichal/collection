function exportMissingToClipboard() {
    const missing = data.filter(d => !d.have).map(d => `${d.num}. ${d.name} [${d.type}] (${d.country})`).join('\n');
    const textarea = document.getElementById('missing-list');
    textarea.value = missing;
    textarea.classList.remove('hidden');
    textarea.select();
    document.execCommand('copy');
    alert(`Skopiowano ${data.filter(d => !d.have).length} brakujących kart do schowka.`);
}



function exportMissingToExcel() {
    const missing = data.filter(d => !d.have);

    // Tworzymy dane do Excela
    const rows = missing.map(d => ({
        Numer: d.num,
        Nazwa: d.name,
        Typ: d.type,
        Kraj: d.country
    }));

    // Tworzymy arkusz i plik
    const worksheet = XLSX.utils.json_to_sheet(rows);
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, "Brakujące karty");

    // Zapis do pliku
    XLSX.writeFile(workbook, "brakujace_karty.xlsx");
}


async function exportMissingToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    const missing = data.filter(d => !d.have);

    doc.setFontSize(14);
    doc.text("Brakujące karty:", 10, 10);

    let y = 20;
    missing.forEach((d, i) => {
        const line = `${d.num}. ${d.name} [${d.type}] (${d.country})`;
        doc.text(line, 10, y);
        y += 8;

        // Nowa strona jeśli za daleko
        if (y > 270) {
            doc.addPage();
            y = 20;
        }
    });

    doc.save("brakujace_karty.pdf");
}