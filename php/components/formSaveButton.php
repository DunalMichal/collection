<?php



function formSaveButton()
{

    ?>

    <div class="form_box-save">
        <label class="form_box-save-label" for="saveButton">
            Zapisz dane
            <span class="form_box-save-info" tabindex="0">ℹ️
      <span class="form_box-save-text">Zapis do notatnika</span>
    </span>
        </label>

        <input type="submit" class="form_box-save-button" id="saveButton" value="Wyslij"/>


<!--        <a href="#" class="form_box-save-send">Wyślij</a>-->
    </div>
    <?php
}