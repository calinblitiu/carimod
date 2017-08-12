<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home3/menmwen/public_html/home/templates/it_mighty/particles/template-js.yaml',
    'modified' => 1472071076,
    'data' => [
        'name' => 'Template.js',
        'description' => 'Configure Template.js.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Template.js particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'This Atom loads the template specific JavaScript code.<br />You <strong>MUST</strong> have this Atom loaded in your "Base" outline.'
                ]
            ]
        ]
    ]
];
