<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home3/menmwen/public_html/home/templates/it_mighty/blueprints/styles/fonts.yaml',
    'modified' => 1472071076,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the InspireTheme theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'body-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'family=Roboto:300'
                ],
                'heading-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Heading Font',
                    'default' => 'family=Raleway:200'
                ],
                'menu-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Menu Font',
                    'default' => 'family=Raleway'
                ]
            ]
        ]
    ]
];
