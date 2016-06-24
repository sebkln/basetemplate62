<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Template Foundation TYPO3 6.2',
    'description' => 'Use it as a base for your website configuration. Add all your Stylesheets, JavaScripts and Templates.',
    'category' => 'templates',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sklein-medien.de',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.4',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-6.2.99',
            'recycler' => '',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);