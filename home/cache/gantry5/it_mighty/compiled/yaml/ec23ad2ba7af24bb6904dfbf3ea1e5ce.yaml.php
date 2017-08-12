<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home3/menmwen/public_html/home/templates/it_mighty/blueprints/styles/base.yaml',
    'modified' => 1472071076,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the Mighty theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'description' => 'Background color of the <body>. It will be overridden by the Section Styles below.',
                    'default' => '#ffffff'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'description' => 'Background image of the <body>. It will be overridden by the Section Styles below.',
                    'default' => ''
                ],
                'background-repeat' => [
                    'type' => 'select.select',
                    'label' => 'Background Repeat',
                    'default' => 'no-repeat',
                    'options' => [
                        'no-repeat' => 'No Repeat',
                        'repeat' => 'Repeat',
                        'repeat-x' => 'Repeat-x',
                        'repeat-y' => 'Repeat-y'
                    ]
                ],
                'background-size' => [
                    'type' => 'select.select',
                    'label' => 'Background Size',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Auto',
                        '100%' => '100%',
                        'cover' => 'Cover'
                    ]
                ],
                'background-attachment' => [
                    'type' => 'select.select',
                    'label' => 'Background Attach.',
                    'default' => 'scroll',
                    'options' => [
                        'scroll' => 'Scroll',
                        'fixed' => 'Fixed'
                    ]
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'description' => 'Text color of the <body>. It will be overridden by the Section Styles below.',
                    'default' => '#999999'
                ]
            ]
        ]
    ]
];
