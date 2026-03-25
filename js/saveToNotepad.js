// document.addEventListener("DOMContentLoaded", function() {
//     const saveButton = document.querySelector(".form_box-save-send");
//
//     if(!saveButton) return; // jeśli przycisku jeszcze nie ma, nie robimy nic
//
//     saveButton.addEventListener("click", function(event) {
//         event.preventDefault(); // blokuje odświeżenie
//
//         const inputs = document.querySelectorAll(".form_section input, .form_section select, .form_section textarea");
//         const data = {};
//
//         inputs.forEach(input => {
//             const key = input.name || input.id;
//             if(key) data[key] = input.value;
//         });
//
//         if(Object.keys(data).length === 0) {
//             alert("Brak danych do zapisania! Sprawdź, czy wszystkie pola mają name lub id.");
//             return;
//         }
//
//         fetch("php/saveToNotepad.php", {
//             method: "POST",
//             headers: {"Content-Type": "application/json"},
//             body: JSON.stringify(data)
//         })
//             .then(res => res.text())
//             .then(msg => alert(msg))
//             .catch(err => alert("Błąd: " + err));
//     });
// });
