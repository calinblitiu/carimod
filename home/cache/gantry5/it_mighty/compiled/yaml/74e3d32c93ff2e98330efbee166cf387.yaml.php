<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home3/menmwen/public_html/home/templates/it_mighty/particles/memories.yaml',
    'modified' => 1472071076,
    'data' => [
        'name' => 'Memories',
        'description' => 'Display Memories.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable memories particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
                ],
                'layout' => [
                    'type' => 'select.select',
                    'label' => 'Layout',
                    'description' => 'Select the layout for this particle.',
                    'placeholder' => 'Select...',
                    'default' => 'right',
                    'options' => [
                        'right' => 'Images on the right',
                        'left' => 'Images on the left'
                    ]
                ],
                'image1' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image 1',
                    'description' => 'Select an image.'
                ],
                'image2' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image 2',
                    'description' => 'Select an image.'
                ],
                'image3' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image 3',
                    'description' => 'Select an image.'
                ],
                'image4' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image 4',
                    'description' => 'Select an image.'
                ],
                'lightbox' => [
                    'type' => 'select.select',
                    'label' => 'Lightbox',
                    'description' => 'Enable or disable the image lightbox/popup.',
                    'placeholder' => 'Select...',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled'
                    ]
                ],
                'parallax' => [
                    'type' => 'select.select',
                    'label' => 'Parallax',
                    'description' => 'Enable or disable the image parallax effect.',
                    'placeholder' => 'Select...',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled'
                    ]
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Type in the title text.',
                    'placeholder' => 'Enter title'
                ],
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Type in the description text.',
                    'placeholder' => 'Enter description'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Button Link',
                    'description' => 'Type in the URL.'
                ],
                'buttontext' => [
                    'type' => 'input.text',
                    'label' => 'Button Text',
                    'description' => 'Type in the button text.'
                ],
                'buttonicon' => [
                    'type' => 'input.icon',
                    'label' => 'Button Icon',
                    'description' => 'Select an icon for the button.'
                ],
                'target' => [
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
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'General CSS Classes',
                    'description' => 'CSS class name for the whole particle.',
                    'default' => NULL
                ],
                'css.left' => [
                    'type' => 'input.selectize',
                    'label' => 'Left CSS Classes',
                    'description' => 'CSS class name for the left element.',
                    'default' => NULL
                ],
                'css.right' => [
                    'type' => 'input.selectize',
                    'label' => 'Right CSS Classes',
                    'description' => 'CSS class name for the right element.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'General Tag Attributes',
                    'description' => 'Extra Tag attributes for the whole particle.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                'extra_left' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Left Tag Attributes',
                    'description' => 'Extra Tag attributes for the left element.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                'extra_right' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Right Tag Attributes',
                    'description' => 'Extra Tag attributes for the right element.',
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
];
