<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'program_coordinator' => [
            'users' => 'c,r,u,d',
            'webinars' => 'c,r,u,d',
            'headline' => 'c,r,u,d',
            'reports' => 'c,r,u,d',
            'topics' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
