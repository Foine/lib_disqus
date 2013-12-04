<?php
return array(
    'layout' => array(
        'lines' => array(
            array(
                'cols' => array(
                    1 => array(
                        'col_number' => 6,
                        'view' => 'nos::form/expander',
                        'params' => array(
                            'title'   => __('Vos identifiants Disqus'),
                            'options' => array(
                                'allowExpand' => false,
                            ),
                            'content' => array(
                                'view' => 'nos::form/fields',
                                'params' => array(
                                    'fields' => array(
                                        'disqus_shortname',
                                    ),
                                ),
                            ),
                        ),
                    ),
                    2 => array(
                        'col_number' => 6,
                        'view' => 'nos::form/expander',
                        'params' => array(
                            'title'   => __('Instruction d\'installation'),
                            'options' => array(
                                'allowExpand' => true,
                            ),
                            'content' => array(
                                'view' => 'lib_disqus::admin/install',
                                'params' => array(),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'fields' => array(
        'disqus_shortname' => array(
            'label' => __('Shortname Disqus'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'full_script' => array(
            'label' => __('Script entier'),
            'form' => array(
                'type' => 'textarea',
            ),
        ),
    ),
);