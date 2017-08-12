<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home3/menmwen/public_html/home/templates/it_mighty/particles/buttons.yaml',
    'modified' => 1472071076,
    'data' => [
        'name' => 'Buttons',
        'description' => 'Display anytype of buttons.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Buttons particles.',
                    'default' => true
                ],
                'mainheading' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Type in the title.',
                    'placeholder' => 'Enter Title',
                    'default' => ''
                ],
                'introtext' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Intro Text',
                    'description' => 'Type in the intro text.',
                    'placeholder' => 'Enter Intro Text',
                    'default' => ''
                ],
                'fixedbuttonwidth' => [
                    'type' => 'select.select',
                    'label' => 'Fixed Width Buttons',
                    'description' => 'Set fixed width for all buttons. Buttons width will be 320px each.',
                    'placeholder' => 'Select...',
                    'default' => 'no',
                    'options' => [
                        'yes' => 'Yes',
                        'no' => 'No'
                    ]
                ],
                'itemsbuttons' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Buttons',
                    'description' => 'Create the buttons you like to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.title1' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'This is the first text title.'
                        ],
                        '.title2' => [
                            'type' => 'input.text',
                            'label' => 'Title 2',
                            'description' => 'This is the second text title.'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Title Link'
                        ],
                        '.target' => [
                            'type' => 'select.select',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_parent',
                            'options' => [
                                '_parent' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.invertbutton' => [
                            'type' => 'input.checkbox',
                            'label' => 'Invert Button',
                            'description' => 'Invert the button color.',
                            'default' => 0
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Class'
                        ],
                        '.extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag Attributes',
                            'description' => 'Extra Tag attributes.',
                            'key_placeholder' => 'Key (data-*, style, ...)',
                            'value_placeholder' => 'Value',
                            'exclude' => [
                                0 => 'id',
                                1 => 'class'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
