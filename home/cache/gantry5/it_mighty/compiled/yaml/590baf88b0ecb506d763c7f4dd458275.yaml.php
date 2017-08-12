<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home3/menmwen/public_html/home/templates/it_mighty/blueprints/styles/fontsizes.yaml',
    'modified' => 1472071076,
    'data' => [
        'name' => 'Font Sizes',
        'description' => 'Set font sizes for different elements.',
        'type' => 'core',
        'form' => [
            'fields' => [
                'body-font-size' => [
                    'type' => 'input.text',
                    'label' => 'Body Font Size',
                    'description' => 'Specify the default <body> font size in rem, em or px units.',
                    'default' => '0.9rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                ],
                'menu-font-size' => [
                    'type' => 'input.text',
                    'label' => 'Menu Font Size',
                    'description' => 'Specify the default Menu font size in rem, em or px units.',
                    'default' => '0.9rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                ]
            ]
        ]
    ]
];
