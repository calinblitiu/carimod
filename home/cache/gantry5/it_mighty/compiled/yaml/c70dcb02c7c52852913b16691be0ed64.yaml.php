<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home3/menmwen/public_html/home/templates/it_mighty/particles/icon-fonts.yaml',
    'modified' => 1472071076,
    'data' => [
        'name' => 'Icon Fonts',
        'description' => 'Configure Icon Fonts.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Icon Fonts particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'This Atom loads the following Icon Fonts so you can use their classes (icons) in all Icon Picker fields.<br /><br /><a href="https://octicons.github.com/" target="_blank">Github Octicons</a><br /><a href="http://themes-pixeden.com/font-demos/7-stroke/" target="_blank">Icon Stroke 7</a><br /><a href="http://ionicons.com/" target="_blank">Ionicons</a><br /><a href="https://themify.me/themify-icons" target="_blank">Themify Icons</a><br /><a href="http://www.typicons.com/" target="_blank">Typicons</a>'
                ],
                'load' => [
                    'type' => 'container.set',
                    'label' => 'Enable',
                    'fields' => [
                        '.octicons' => [
                            'type' => 'enable.enable',
                            'label' => 'Github Octicons',
                            'default' => 0
                        ],
                        '.strokeicon7' => [
                            'type' => 'enable.enable',
                            'label' => 'Icon Stroke 7',
                            'default' => 0
                        ],
                        '.ionicons' => [
                            'type' => 'enable.enable',
                            'label' => 'Ionicons',
                            'default' => 0
                        ],
                        '.themify' => [
                            'type' => 'enable.enable',
                            'label' => 'Themify Icons',
                            'default' => 0
                        ],
                        '.typicons' => [
                            'type' => 'enable.enable',
                            'label' => 'Typicons',
                            'default' => 0
                        ]
                    ]
                ]
            ]
        ]
    ]
];
