<?php
return [
    'db' => [
        'username' => '',
        'password' => '',
        'dbname' => ''
    ],
    'view' => [
        'dir' => __DIR__ . '/../src/'
    ],
    'autoloader' => [
        '' => __DIR__ . '/../src/',
        'Fixtures' => __DIR__ . '/../tests/',
    ],
    /**
     * TODO: DB storage
     */
    'cvMaker' => [
        'format' => 'pdf',
        'templateCv' => 'Modules/CvMaker/View/Cv/sample1.php',
        'templateSections' => 'Modules/CvMaker/View/Section/sectionsCollection.php',
        'templateSectionItem' => 'Modules/CvMaker/View/Section/SectionItem/sample1.php',
        'templaterateChart' => 'Modules/CvMaker/View/Section/SectionItem/rateChart.php',
        'templateratePerson' => 'Modules/CvMaker/View/Person/person.php',
        'templateItemBody' => [
            'defaultBody' => 'Modules/CvMaker/View/Section/SectionItem/defaultBody.php',
            'defaultItem' => 'Modules/CvMaker/View/Section/SectionItem/defaultItem.php',
            'work' => 'Modules/CvMaker/View/Section/SectionItem/work.php',
            'edu' => 'Modules/CvMaker/View/Section/SectionItem/edu.php',
            'skill' => 'Modules/CvMaker/View/Section/SectionItem/skill.php',
        ],
        'data' => [
            'person' => [
                'name' => 'John',
                'surname' => 'Doe',
                'bitrhYear' => 1901,
                'livingCity' => 'Warsow',
                'email' => 'john@doe.com',
                'mobile' => '+48 0 700 777 777',
                'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan ultrices nulla ac fermentum. Sed non tincidunt lacus, in cursus libero. Integer dictum porttitor commodo. Aliquam eleifend sollicitudin tincidunt. Aenean consectetur id tellus in auctor. Vestibulum gravida porttitor orci, a efficitur nulla ullamcorper sed.'
            ],
            'sectionsCollection' => [
                [
                    'position' => 1,
                    'name' => '<span class="fa tasks">&#xf0ae;</span> Section 1 - with page break',
                    'type' => 'work',
                    'sectionItems' => [
                        [
                            'name' => 'Company name',
                            'city' => 'City, location',
                            'date_from' => '00/0000',
                            'date_to' => '00/0000',
                            'occupation' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan ultrices nulla ac fermentum. Sed non tincidunt lacus, in cursus libero. Integer dictum porttitor commodo. Aliquam eleifend sollicitudin tincidunt. Aenean consectetur id tellus in auctor. Vestibulum gravida porttitor orci, a efficitur nulla ullamcorper sed.'
                        ],
                        [
                            'name' => 'Company name',
                            'city' => 'City, location',
                            'date_from' => '00/0000',
                            'date_to' => '00/0000',
                            'occupation' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan ultrices nulla ac fermentum. Sed non tincidunt lacus, in cursus libero. Integer dictum porttitor commodo. Aliquam eleifend sollicitudin tincidunt. Aenean consectetur id tellus in auctor. Vestibulum gravida porttitor orci, a efficitur nulla ullamcorper sed.'
                        ],
                        [
                            'name' => 'Company name',
                            'city' => 'City, location',
                            'date_from' => '00/0000',
                            'date_to' => '00/0000',
                            'occupation' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan ultrices nulla ac fermentum. Sed non tincidunt lacus, in cursus libero. Integer dictum porttitor commodo. Aliquam eleifend sollicitudin tincidunt. Aenean consectetur id tellus in auctor. Vestibulum gravida porttitor orci, a efficitur nulla ullamcorper sed.'
                        ]
                    ]
                ],
                [
                    'position' => 2,
                    'name' => '<span class="fa">&#xf19d;</span> Section 2',
                    'type' => 'edu',
                    'sectionItems' => [
                        [
                            'name' => 'School name',
                            'date_from' => '00/0000',
                            'date_to' => '00/0000',
                            'degree' => 'School degree, location',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
                        ]
                    ]
                ],
                [
                    'position' => 3,
                    'name' => '<span class="fa check">&#xf00c;</span> Section 3',
                    'type' => 'skill',
                    'sectionItems' => [
                        [
                            'name' => 'Skill name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                            'rate' => 5
                        ]
                    ]
                ],
                [
                    'position' => 10,
                    'name' => 'Section 4',
                    'type' => 'lang',
                    'sectionItems' => [
                        [
                            'name' => 'Item name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                        ]
                    ]
                ]
            ],
            'terms' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan ultrices nulla ac fermentum. Sed non tincidunt lacus, in cursus libero. Integer dictum porttitor commodo. Aliquam eleifend sollicitudin tincidunt. Aenean consectetur id tellus in auctor. Vestibulum gravida porttitor orci, a efficitur nulla ullamcorper sed.',
            ]
        ]
    ]
];
