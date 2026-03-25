<?php

return [

    /* =========================
     * PODSTAWOWE INFORMACJE
     * ========================= */
    'basic' => [
        'label' => 'Podstawowe informacje',
        'fields' => [

            'card_number' => [
                'label'    => 'Numer karty',
                'hint'     => 'Np. 1 / BE1 / AC-01',
                'type'     => 'text',
                'required' => true,
            ],

            'card_name' => [
                'label'    => 'Nazwa karty',
                'hint'     => 'Np. Robert Lewandowski / Pikachu / Samochód',
                'type'     => 'text',
                'required' => true,
            ],

            'card_category' => [
                'label' => 'Kategoria karty',
                'hint'  => 'Np. Kraj, Drużyna, Polska, Lech, Czerwona',
                'type'  => 'text',
            ],
        ],
    ],

    /* =========================
     * TYP / WARIANT
     * ========================= */
    'type' => [
        'label' => 'Typ i wariant karty',
        'fields' => [

            'card_type' => [
                'label'   => 'Typ karty',
                'hint'    => 'Np. Bazowa, Promo, Insert, FullForce, Magic',
                'type'    => 'select',
                'options' => [
                    ''          => 'Wybierz typ',
                    'base'      => 'Bazowa',
                    'promo'     => 'Promo',
                    'insert'    => 'Insert',
                    'fullforce' => 'FullForce',
                    'magic'     => 'Magic',
                    'other'     => 'Inne',
                ],
            ],

            'card_variant' => [
                'label'   => 'Wariant karty',
                'hint'    => 'Np. Green Emerald, RedStar, Circus, Holo, Foil',
                'type'    => 'select',
                'options' => [
                    ''        => 'Wybierz wariant',
                    'green'   => 'Green Emerald',
                    'red'     => 'Red Star',
                    'circus'  => 'Circus',
                    'holo'    => 'Holo',
                    'foil'    => 'Foil',
                    'other'   => 'Inne',
                ],
            ],

            'first_card' => [
                'label' => 'First Card',
                'hint'  => 'Np. Attax Debut / Rookie Card',
                'type'  => 'checkbox',
            ],
        ],
    ],

    /* =========================
     * WYDANIE / SERIA
     * ========================= */
    'edition' => [
        'label' => 'Seria i wydanie',
        'fields' => [

            'series_name' => [
                'label' => 'Seria / Wydanie',
                'hint'  => 'Np. Match Attax 2023/24',
                'type'  => 'text',
            ],

            'release_year' => [
                'label' => 'Rok wydania',
                'type'  => 'number',
            ],

            'series_number' => [
                'label' => 'Numer w serii',
                'type'  => 'text',
            ],
        ],
    ],

    /* =========================
     * DODATKOWE INFORMACJE
     * ========================= */
    'additional' => [
        'label' => 'Dodatkowe informacje',
        'fields' => [

            'artist' => [
                'label' => 'Artysta / Grafik',
                'type'  => 'text',
            ],

            'license' => [
                'label' => 'Licencja / Temat',
                'hint'  => 'Np. FIFA, NBA, Pokémon',
                'type'  => 'text',
            ],

            'license_group' => [
                'label' => 'Licencja / Gra / Liga',
                'type'  => 'text',
            ],
        ],
    ],
];
