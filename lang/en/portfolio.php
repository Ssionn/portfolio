<?php

return [
    'title' => 'SsionnHub',

    'navigation_tabs' => [
        'portfolio' => 'Home',
        'who_am_i' => 'Who Am I?',
        'projects' => 'Projects',
        'contact' => 'Contact',
    ],

    'who_am_i' => [
        'title' => ':title',
        'description' => ':description',
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
