<?php
function renderInputField(string $name, array $config) {
    $label    = $config['label'] ?? '';
    $hint     = $config['hint'] ?? '';
    $type     = $config['type'] ?? 'text';
    $required = !empty($config['required']) ? 'required' : '';
    $pattern  = $config['pattern'] ?? '';
    $options  = $config['options'] ?? [];

    echo '<div class="form_box">';

    echo '<label class="form_box-label" for="'.htmlspecialchars($name).'">';
    echo htmlspecialchars($label);
    if ($hint) {
        echo '<span class="form_box-info" tabindex="0">ℹ️';
        echo '<span class="form_box-text">'.htmlspecialchars($hint).'</span>';
        echo '</span>';
    }
    echo '</label>';

    // select
    if ($type === 'select') {
        echo '<select class="form_box-input" id="'.htmlspecialchars($name).'" name="'.htmlspecialchars($name).'" '.$required.'>';
        foreach ($options as $value => $optionLabel) {
            echo '<option value="'.htmlspecialchars($value).'">'.htmlspecialchars($optionLabel).'</option>';
        }
        echo '</select>';
    }
    // checkbox
    elseif ($type === 'checkbox') {
        echo '<input type="checkbox" class="form_box-input" id="'.htmlspecialchars($name).'" name="'.htmlspecialchars($name).'" '.$required.'>';
    }
    // standardowy input
    else {
        echo '<input type="'.htmlspecialchars($type).'" class="form_box-input" id="'.htmlspecialchars($name).'" name="'.htmlspecialchars($name).'" '.$required;
        if ($pattern) {
            echo ' pattern="'.htmlspecialchars($pattern).'" title="Format: '.htmlspecialchars($hint).'"';
        }
        echo '>';
    }

    echo '</div>';
}
