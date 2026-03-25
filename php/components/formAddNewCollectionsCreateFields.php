<?php

function generateFormCollectionFields($fields, $nextID)
{
    // Mapa kolumn -> etykiety w formularzu
    $labelMap = [
        'id'        => 'ID',
        'name'      => 'Nazwa Kolekcji',
        'publisher' => 'Wydawca',
        'yearofpublish' => 'Rok Wydania',
        'cardscount' => 'Ilość Kart',
        'description' => 'Opis',



        // dodaj inne kolumny, które chcesz zmienić
    ];

    foreach ($fields as $index => $field) {
        $name  = $field['name'];
        $type  = $field['type'];
        $label = isset($labelMap[strtolower($name)]) ? $labelMap[strtolower($name)] : ucfirst($name);

        // ID jako readonly
        if (strtolower($name) === 'id') {
            formReadOnlyInput($nextID,$name, $label);

            // pola liczbowe
        } elseif (strpos($type, 'int') !== false) {
            formTextInput($name, $label, true);

            // pola tekstowe
        } elseif (strpos($type, 'varchar') !== false || strpos($type, 'text') !== false) {
            formTextInput($name, $label, true);

            // obsługa enum
        } elseif (strpos($type, 'enum') !== false) {
            $cutText = substr($type, 5, -1);
            $cutText = str_replace("'", '"', $cutText);
            $cutText = '['.$cutText.']';
            $variants = json_decode($cutText, true);
            $enum_array = [];
            foreach ($variants as $variant) {
                $enum_array[] = array("ID" => $variant, "Name" => $variant);
            }
            formSelectInput($name, $label, $enum_array, true);

        }
    }
}
