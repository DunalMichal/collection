<?php
function renderCardForm(array $formConfig, string $parentName = 'card') {
    foreach ($formConfig as $groupKey => $group) {
        echo '<h3>'.htmlspecialchars($group['label']).'</h3>';

        foreach ($group['fields'] as $fieldName => $fieldConfig) {
            $inputName = $parentName.'['.$fieldName.']';
            renderInputField($inputName, $fieldConfig);
        }
    }
}

// użycie
$formConfig = require __DIR__ . '/card_form_fields.php';
renderCardForm($formConfig);
