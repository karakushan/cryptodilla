<?php

return [
    'base' => [
        'id' => 0,
        'name' => 'Basic',
        'fields' => [
            'site-name' => [
                'label' => 'Название сайта',
                'component' => 'field-text'
            ]
        ]
    ],
    'terminal' => [
        'id' => 1,
        'name' => 'Terminal',
        'fields' => [
            'mode' => [
                'label' => 'Включить режим обслуживания',
                'component' => 'field-checkbox'
            ]
        ]
    ],
    'blocks' => [
        'id' => 1,
        'name' => 'Blocks',
        'fields' => []
    ],
];
