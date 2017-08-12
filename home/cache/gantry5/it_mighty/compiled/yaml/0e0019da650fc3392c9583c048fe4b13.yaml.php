<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home3/menmwen/public_html/home/templates/it_mighty/blueprints/styles/subfeature.yaml',
    'modified' => 1472071076,
    'data' => [
        'name' => 'Subfeature Styles',
        'description' => 'Subfeature styles for the Mighty theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'default' => '#2d3941'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => 'gantry-media://back2.jpg'
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
                    'default' => '#ffffff'
                ],
                'heading-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Heading Color',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
