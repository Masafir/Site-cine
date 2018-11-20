<?php
$filmsAssociatif = [
    [
        'nom' => 'Harry Potter à l\'école des sorciers',
        'url' =>'harrypotter',
        'année' => '2001',
        'categorie'=> 'fantaisie',
        'affiche'=>'../../../critiques/images/harrypotter.jpg',
        'horaires' => [
            10 => true,
            12 => false,
            14 => true,
            16 => true,
            18 => false,
            20 => true,
            22 => false,
            00 => false,
        ],
        'critique' =>"../../critiques/harrypotter.php"
    ],
    [
        'nom' => 'Divergente',
        'url' => 'divergent',
        'année' => '2011',
        'categorie'=>'action',
        'affiche'=>'../../../critiques/images/divergent.png',
        'horaires' => [
            10 => false,
            12 => false,
            14 => false,
            16 => false,
            18 => true,
            20 => true,
            22 => true,
            00 => false,
        ]
    ],
    [
        'nom' => 'Le Roi Lion',
        'année' => '1994',
        'url' => 'leroilion',
        'categorie'=>'enfant',
        'affiche' => '../../../critiques/images/leroilion.png',
        'horaires' => [
            10 => false,
            12 => false,
            14 => true,
            16 => true,
            18 => false,
            20 => false,
            22 => false,
            00 => false,
        ]
    ],
    [
        'nom' => 'Batman,Dark-Knight',
        'année' => '2009',
        'url'=> 'batman',
        'affiche'=>'../../../critiques/images/batman.png',
        'categorie'=>'action',
        'horaires' => [
            10 => false,
            12 => false,
            14 => false,
            16 => false,
            18 => true,
            20 => true,
            22 => true,
            00 => false,
        ]
    ],
    [
        'nom' => 'Conjuring 2',
        'année' => '2016',
        'url'=>'conjuring',
        'affiche'=>'../../../critiques/images/conjuring.png',
        'categorie'=> 'horreur',
        'horaires' => [
            10 => false,
            12 => false,
            14 => false,
            16 => false,
            18 => false,
            20 => false,
            22 => true,
            00 => true,
        ]
    ],
];
?>