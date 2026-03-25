document.addEventListener("DOMContentLoaded", function() {
    const selectType = document.getElementById("collectionsType");
    const sportFields = document.getElementById("sport-fields");
    const tcgFields = document.getElementById("tcg-fields");

    if (!selectType) return;

    function toggleFields() {
        sportFields.style.display = "none";
        tcgFields.style.display = "none";

        if (selectType.value === "sport") {
            sportFields.style.display = "block";
        } else if (selectType.value === "tcg") {
            tcgFields.style.display = "block";
        }
    }

    selectType.addEventListener("change", toggleFields);
    toggleFields();
});
