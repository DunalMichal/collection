<?php

function addCardUniversalButton($name, $label){


?>

  <div class="form_box">
        <label class="form_box-label" for="<?=$name?>"><?=$label?>
      <label class="form_box-label" for="">
            <span class="form_box-info" tabindex="0">ℹ️
            <span class="form_box-text"></span>
            <span class="form_box-text"></span>
        </span></label>
<!--        <input class="form_box-input" type="text" id="--><?php //=$name?><!--" name="--><?php //=$name?><!--" required="--><?php //=$required?><!--">-->
        <input class="form_box-input" type="text" id="" name="" required="">
    </div>

<?php
}
