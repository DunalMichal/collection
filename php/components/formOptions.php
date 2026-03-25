<?php

function generateFormOption() {
    return [
        'collectionsType' => [
            'sport' => "Sport",
            'tcg' => "TCG",
        ],
        'publishers' => [
            'topps'  => 'Topps',
            'panini' => 'Panini',
            'euro'   => 'Euro',
            'stich'  => 'Stich'
        ],

        'collectionTypes' => [
            'stickers' => 'Naklejki',
            'cards'    => 'Karty kolekcjonerskie',
            'limited'  => 'Edycje limitowane'
        ],

        'seasons' => [
            '2023' => 'Sezon 2023',
            '2024' => 'Sezon 2024',
            '2025' => 'Sezon 2025'
        ]
    ];
}
