<?php

return [
    'title' => 'SsionnHub',

    'navigation_tabs' => [
        'portfolio' => 'Home',
        'who_am_i' => 'Who Am I?',
        'company_website' => 'CKWD',
        'projects' => 'Projects',
        'contact' => 'Contact',
    ],

    'who_am_i' => [
        'title' => ':title',
        'description' => ':description',
    ],

    'company_website' => [
        'header' => 'CKWD',

        'description' => 'Visit the CKWD website to learn more about the services I offer.',
        'link' => 'Visit CK Web development',
    ],

    'projects' => [
        'header' => 'Projects',

        'data' => [
            'commits' => ':commit_count Commits',
            'stars' => ':star_count Stars',
            'forks' => ':fork_count Forks',
        ],
    ],

    'copyright' => ':date Casper Kizewski. All rights reserved.',

    'links' => [
        'github_pretext' => 'View the source code on ',
        'github' => 'GitHub',
        'license_pretext' => 'Licensed under the ',
        'license' => 'MIT License',
    ],
];
