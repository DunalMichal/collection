<?php
function addEditCollection($fields, $nextID, $existingCollections) {
    ?>

    <div class="form_box">
        <label class="form_box-label">Wybierz Co Chcesz Robić</label>
        <select id="collectionType">
            <option value="">-- Wybierz --</option>
            <option value="new">Nowa Kolekcja</option>
            <option value="existing">Edycja Kolekcji</option>
        </select>
    </div>

    <!-- Sekcja dla nowej kolekcji -->
    <div id="newCollectionFields" style="display:none; margin-top:10px;">
        <h3>Nowa Kolekcja</h3>
        <?php foreach ($fields as $field): ?>
            <div class="form_box">
                <label><?= ucfirst($field['name']) ?></label>
                <input type="text" name="<?= $field['name'] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Sekcja dla edycji kolekcji -->
    <div id="existingCollectionFields" style="display:none; margin-top:10px;">
        <h3>Edycja Kolekcji</h3>
        <div class="form_box">
            <label>Wybierz Kolekcję</label>
            <select name="existingName">
                <option value="">-- Wybierz --</option>
                <?php foreach ($existingCollections['name'] as $name): ?>
                    <option value="<?= $name ?>"><?= $name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <script>
        const collectionType = document.getElementById('collectionType');
        const newFields = document.getElementById('newCollectionFields');
        const existingFields = document.getElementById('existingCollectionFields');

        collectionType.addEventListener('change', function() {
            if (this.value === 'new') {
                newFields.style.display = 'block';
                existingFields.style.display = 'none';
            } else if (this.value === 'existing') {
                newFields.style.display = 'none';
                existingFields.style.display = 'block';
            } else {
                newFields.style.display = 'none';
                existingFields.style.display = 'none';
            }
        });
    </script>

    <?php
}
?>
