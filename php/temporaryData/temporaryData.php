<?php


/* =========================================================
 * TEMPORARY CHECKLIST HELPERS
 * ========================================================= */


/**
 * Standardowa karta Base
 */
function temporaryBaseVariants(): array
{
    return [
        [
            'name' => 'Base',
            'limit' => ''
        ],
        [
            'name' => 'Refractor',
            'limit' => ''
        ],
        [
            'name' => 'Aqua',
            'limit' => '/199'
        ],
        [
            'name' => 'Blue',
            'limit' => '/150'
        ],
        [
            'name' => 'Purple',
            'limit' => '/99'
        ],
        [
            'name' => 'Gold',
            'limit' => '/50'
        ],
        [
            'name' => 'Orange',
            'limit' => '/25'
        ],
        [
            'name' => 'Red',
            'limit' => '/10'
        ],
        [
            'name' => 'SuperFractor',
            'limit' => '1/1'
        ]
    ];
}


/**
 * Autograf
 */
function temporaryAutographVariants(): array
{
    return [
        [
            'name' => 'Base Autograph',
            'limit' => '/150'
        ],
        [
            'name' => 'Blue Autograph',
            'limit' => '/99'
        ],
        [
            'name' => 'Gold Autograph',
            'limit' => '/50'
        ],
        [
            'name' => 'Orange Autograph',
            'limit' => '/25'
        ],
        [
            'name' => 'Red Autograph',
            'limit' => '/10'
        ],
        [
            'name' => 'SuperFractor Autograph',
            'limit' => '1/1'
        ]
    ];
}


/**
 * Relic
 */
function temporaryRelicVariants(): array
{
    return [
        [
            'name' => 'Base Relic',
            'limit' => '/199'
        ],
        [
            'name' => 'Blue Relic',
            'limit' => '/99'
        ],
        [
            'name' => 'Gold Relic',
            'limit' => '/50'
        ],
        [
            'name' => 'Orange Relic',
            'limit' => '/25'
        ],
        [
            'name' => 'Red Relic',
            'limit' => '/10'
        ],
        [
            'name' => 'SuperFractor Relic',
            'limit' => '1/1'
        ]
    ];
}


/**
 * Autograph + Relic
 */
function temporaryAutoRelicVariants(): array
{
    return [
        [
            'name' => 'Autograph Relic',
            'limit' => '/99'
        ],
        [
            'name' => 'Gold Autograph Relic',
            'limit' => '/50'
        ],
        [
            'name' => 'Orange Autograph Relic',
            'limit' => '/25'
        ],
        [
            'name' => 'Red Autograph Relic',
            'limit' => '/10'
        ],
        [
            'name' => 'SuperFractor Autograph Relic',
            'limit' => '1/1'
        ]
    ];
}


/**
 * Ikony
 */
function temporaryIcons(
    bool $parallel = true,
    bool $autograph = false,
    bool $relic = false,
    bool $numbered = true
): array
{
    $icons = [];

    if ($parallel) {
        $icons[] = [
            'title' => 'Parallel',
            'symbol' => 'P'
        ];
    }

    if ($autograph) {
        $icons[] = [
            'title' => 'Autograph',
            'symbol' => 'A'
        ];
    }

    if ($relic) {
        $icons[] = [
            'title' => 'Relic',
            'symbol' => 'R'
        ];
    }

    if ($numbered) {
        $icons[] = [
            'title' => 'Numbered',
            'symbol' => '#'
        ];
    }

    return $icons;
}


/**
 * Generowanie zwykłej karty drużyny
 */
function temporaryTeamCard(
    string $number,
    string $playerName,
    string $team,
    string $type = 'base'
): array
{
    switch ($type) {

        case 'autograph':

            $icons = temporaryIcons(
                true,
                true,
                false,
                true
            );

            $variants = array_merge(
                temporaryBaseVariants(),
                temporaryAutographVariants()
            );

            break;


        case 'relic':

            $icons = temporaryIcons(
                true,
                false,
                true,
                true
            );

            $variants = array_merge(
                temporaryBaseVariants(),
                temporaryRelicVariants()
            );

            break;


        case 'auto-relic':

            $icons = temporaryIcons(
                true,
                true,
                true,
                true
            );

            $variants = array_merge(
                temporaryBaseVariants(),
                temporaryAutographVariants(),
                temporaryRelicVariants(),
                temporaryAutoRelicVariants()
            );

            break;


        case 'base':
        default:

            $icons = temporaryIcons(
                true,
                false,
                false,
                true
            );

            $variants = temporaryBaseVariants();

            break;
    }


    return [
        'number' => $number,
        'playerName' => $playerName,
        'team' => $team,
        'icons' => $icons,
        'variants' => $variants
    ];
}


/* =========================================================
 * TEAM DATA
 * ========================================================= */


/*
 * Arsenal
 */
$arsenalCards = [

    temporaryTeamCard(
        '#001',
        'Bukayo Saka',
        'Arsenal',
        'autograph'
    ),

    temporaryTeamCard(
        '#002',
        'Martin Ødegaard',
        'Arsenal',
        'autograph'
    ),

    temporaryTeamCard(
        '#003',
        'Declan Rice',
        'Arsenal',
        'relic'
    ),

    temporaryTeamCard(
        '#004',
        'William Saliba',
        'Arsenal'
    ),

    temporaryTeamCard(
        '#005',
        'Gabriel Magalhães',
        'Arsenal'
    ),

    temporaryTeamCard(
        '#006',
        'Gabriel Martinelli',
        'Arsenal',
        'relic'
    ),

    temporaryTeamCard(
        '#007',
        'Kai Havertz',
        'Arsenal',
        'autograph'
    ),

    temporaryTeamCard(
        '#008',
        'David Raya',
        'Arsenal'
    ),

    temporaryTeamCard(
        '#009',
        'Jurriën Timber',
        'Arsenal'
    ),

    temporaryTeamCard(
        '#010',
        'Ben White',
        'Arsenal'
    ),

    temporaryTeamCard(
        '#011',
        'Riccardo Calafiori',
        'Arsenal'
    ),

    temporaryTeamCard(
        '#012',
        'Mikel Merino',
        'Arsenal',
        'relic'
    ),

    temporaryTeamCard(
        '#013',
        'Leandro Trossard',
        'Arsenal'
    ),

    temporaryTeamCard(
        '#014',
        'Gabriel Jesus',
        'Arsenal',
        'auto-relic'
    ),

    temporaryTeamCard(
        '#015',
        'Ethan Nwaneri',
        'Arsenal',
        'autograph'
    ),

    temporaryTeamCard(
        '#016',
        'Myles Lewis-Skelly',
        'Arsenal',
        'autograph'
    )

];


/*
 * Manchester City
 */
$manchesterCityCards = [

    temporaryTeamCard(
        '#021',
        'Erling Haaland',
        'Manchester City',
        'auto-relic'
    ),

    temporaryTeamCard(
        '#022',
        'Phil Foden',
        'Manchester City',
        'autograph'
    ),

    temporaryTeamCard(
        '#023',
        'Rodri',
        'Manchester City',
        'relic'
    ),

    temporaryTeamCard(
        '#024',
        'Bernardo Silva',
        'Manchester City',
        'autograph'
    ),

    temporaryTeamCard(
        '#025',
        'Rúben Dias',
        'Manchester City'
    ),

    temporaryTeamCard(
        '#026',
        'John Stones',
        'Manchester City'
    ),

    temporaryTeamCard(
        '#027',
        'Josko Gvardiol',
        'Manchester City',
        'relic'
    ),

    temporaryTeamCard(
        '#028',
        'Nathan Aké',
        'Manchester City'
    ),

    temporaryTeamCard(
        '#029',
        'Mateo Kovačić',
        'Manchester City'
    ),

    temporaryTeamCard(
        '#030',
        'Savinho',
        'Manchester City',
        'autograph'
    ),

    temporaryTeamCard(
        '#031',
        'Jeremy Doku',
        'Manchester City',
        'relic'
    ),

    temporaryTeamCard(
        '#032',
        'Oscar Bobb',
        'Manchester City',
        'autograph'
    ),

    temporaryTeamCard(
        '#033',
        'Ederson',
        'Manchester City'
    ),

    temporaryTeamCard(
        '#034',
        'Rico Lewis',
        'Manchester City',
        'autograph'
    )

];


/*
 * Chelsea
 */
$chelseaCards = [

    temporaryTeamCard(
        '#041',
        'Cole Palmer',
        'Chelsea',
        'auto-relic'
    ),

    temporaryTeamCard(
        '#042',
        'Enzo Fernández',
        'Chelsea',
        'autograph'
    ),

    temporaryTeamCard(
        '#043',
        'Moisés Caicedo',
        'Chelsea',
        'relic'
    ),

    temporaryTeamCard(
        '#044',
        'Reece James',
        'Chelsea',
        'autograph'
    ),

    temporaryTeamCard(
        '#045',
        'Levi Colwill',
        'Chelsea'
    ),

    temporaryTeamCard(
        '#046',
        'Marc Cucurella',
        'Chelsea'
    ),

    temporaryTeamCard(
        '#047',
        'Wesley Fofana',
        'Chelsea'
    ),

    temporaryTeamCard(
        '#048',
        'Nicolas Jackson',
        'Chelsea',
        'relic'
    ),

    temporaryTeamCard(
        '#049',
        'Noni Madueke',
        'Chelsea',
        'autograph'
    ),

    temporaryTeamCard(
        '#050',
        'Pedro Neto',
        'Chelsea',
        'relic'
    ),

    temporaryTeamCard(
        '#051',
        'Christopher Nkunku',
        'Chelsea',
        'auto-relic'
    ),

    temporaryTeamCard(
        '#052',
        'Romeo Lavia',
        'Chelsea'
    ),

    temporaryTeamCard(
        '#053',
        'Malo Gusto',
        'Chelsea'
    ),

    temporaryTeamCard(
        '#054',
        'Robert Sánchez',
        'Chelsea'
    )

];



/* =========================================================
 * CHECKLIST TEMPORARY DATA
 * ========================================================= */

$checklistTemporaryData = [

    /*
     * =====================================================
     * BASE
     * =====================================================
     */

    'base-set' => [
        'title' => 'Base Set',
        'cardsCount' => 100,
        'typeID' => 21,

        'cards' => [

            temporaryTeamCard(
                '#001',
                'Bukayo Saka',
                'Arsenal',
                'autograph'
            ),

            temporaryTeamCard(
                '#002',
                'Martin Ødegaard',
                'Arsenal',
                'base'
            ),

            temporaryTeamCard(
                '#021',
                'Erling Haaland',
                'Manchester City',
                'relic'
            ),

            temporaryTeamCard(
                '#041',
                'Cole Palmer',
                'Chelsea',
                'auto-relic'
            )

        ]
    ],


    /*
     * =====================================================
     * INSERTS
     * =====================================================
     */

    'ageless-alchemy' => [
        'title' => 'Ageless Alchemy',
        'cardsCount' => 20,
        'typeID' => 22,

        'cards' => [

            [
                'number' => 'AA-1',
                'playerName' => 'Bukayo Saka',
                'team' => 'Arsenal',

                'icons' => temporaryIcons(
                    true,
                    false,
                    false,
                    true
                ),

                'variants' => [
                    [
                        'name' => 'Base',
                        'limit' => ''
                    ],
                    [
                        'name' => 'Blue',
                        'limit' => '/150'
                    ],
                    [
                        'name' => 'Purple',
                        'limit' => '/99'
                    ],
                    [
                        'name' => 'Gold',
                        'limit' => '/50'
                    ],
                    [
                        'name' => 'Red',
                        'limit' => '/10'
                    ],
                    [
                        'name' => 'SuperFractor',
                        'limit' => '1/1'
                    ]
                ]
            ],

            [
                'number' => 'AA-2',
                'playerName' => 'Erling Haaland',
                'team' => 'Manchester City',

                'icons' => temporaryIcons(
                    true,
                    false,
                    false,
                    true
                ),

                'variants' => temporaryBaseVariants()
            ]

        ]
    ],


    'mystic-nights' => [
        'title' => 'Mystic Nights',
        'cardsCount' => 15,
        'typeID' => 22,

        'cards' => [

            [
                'number' => 'MN-1',
                'playerName' => 'Cole Palmer',
                'team' => 'Chelsea',

                'icons' => temporaryIcons(
                    true,
                    false,
                    false,
                    true
                ),

                'variants' => temporaryBaseVariants()
            ]

        ]
    ],


    /*
     * =====================================================
     * AUTOGRAPHS
     * =====================================================
     */

    'base-autographs' => [
        'title' => 'Base Autographs',
        'cardsCount' => 40,
        'typeID' => 23,

        'cards' => [

            [
                'number' => 'BA-BS',
                'playerName' => 'Bukayo Saka',
                'team' => 'Arsenal',

                'icons' => temporaryIcons(
                    false,
                    true,
                    false,
                    true
                ),

                'variants' => temporaryAutographVariants()
            ],

            [
                'number' => 'BA-EH',
                'playerName' => 'Erling Haaland',
                'team' => 'Manchester City',

                'icons' => temporaryIcons(
                    false,
                    true,
                    false,
                    true
                ),

                'variants' => temporaryAutographVariants()
            ],

            [
                'number' => 'BA-CP',
                'playerName' => 'Cole Palmer',
                'team' => 'Chelsea',

                'icons' => temporaryIcons(
                    false,
                    true,
                    false,
                    true
                ),

                'variants' => temporaryAutographVariants()
            ]

        ]
    ],


    'legend-autographs' => [
        'title' => 'Legend Autographs',
        'cardsCount' => 15,
        'typeID' => 23,

        'cards' => [

            [
                'number' => 'LA-TH',
                'playerName' => 'Thierry Henry',
                'team' => 'Arsenal',

                'icons' => temporaryIcons(
                    false,
                    true,
                    false,
                    true
                ),

                'variants' => [
                    [
                        'name' => 'Base Autograph',
                        'limit' => '/99'
                    ],
                    [
                        'name' => 'Gold Autograph',
                        'limit' => '/50'
                    ],
                    [
                        'name' => 'Orange Autograph',
                        'limit' => '/25'
                    ],
                    [
                        'name' => 'Red Autograph',
                        'limit' => '/10'
                    ],
                    [
                        'name' => 'SuperFractor Autograph',
                        'limit' => '1/1'
                    ]
                ]
            ]

        ]
    ],


    /*
     * =====================================================
     * RELICS
     * =====================================================
     */

    'match-relics' => [
        'title' => 'Match Relics',
        'cardsCount' => 25,
        'typeID' => 24,

        'cards' => [

            [
                'number' => 'MR-01',
                'playerName' => 'Mohamed Salah',
                'team' => 'Liverpool',

                'icons' => temporaryIcons(
                    false,
                    false,
                    true,
                    true
                ),

                'variants' => temporaryRelicVariants()
            ],

            [
                'number' => 'MR-02',
                'playerName' => 'Declan Rice',
                'team' => 'Arsenal',

                'icons' => temporaryIcons(
                    false,
                    false,
                    true,
                    true
                ),

                'variants' => temporaryRelicVariants()
            ],

            [
                'number' => 'MR-03',
                'playerName' => 'Erling Haaland',
                'team' => 'Manchester City',

                'icons' => temporaryIcons(
                    false,
                    false,
                    true,
                    true
                ),

                'variants' => temporaryRelicVariants()
            ]

        ]
    ],


    'auto-relics' => [
        'title' => 'Autograph Relics',
        'cardsCount' => 10,
        'typeID' => 24,

        'cards' => [

            [
                'number' => 'AR-01',
                'playerName' => 'Cole Palmer',
                'team' => 'Chelsea',

                'icons' => temporaryIcons(
                    false,
                    true,
                    true,
                    true
                ),

                'variants' => temporaryAutoRelicVariants()
            ],

            [
                'number' => 'AR-02',
                'playerName' => 'Bukayo Saka',
                'team' => 'Arsenal',

                'icons' => temporaryIcons(
                    false,
                    true,
                    true,
                    true
                ),

                'variants' => temporaryAutoRelicVariants()
            ]

        ]
    ],


    /*
     * =====================================================
     * TEAMS
     * =====================================================
     */

    'arsenal' => [
        'title' => 'Arsenal',
        'cardsCount' => count($arsenalCards),
        'typeID' => 25,
        'cards' => $arsenalCards
    ],


    'manchester-city' => [
        'title' => 'Manchester City',
        'cardsCount' => count($manchesterCityCards),
        'typeID' => 25,
        'cards' => $manchesterCityCards
    ],


    'chelsea' => [
        'title' => 'Chelsea',
        'cardsCount' => count($chelseaCards),
        'typeID' => 25,
        'cards' => $chelseaCards
    ]

];