<?php

use BlimCms\Http\Route;

return [
    ''  => new Route('/', [
        //'controller' => '\Modules\Page\Controller\PageIndexController'
        'controller' => '\Modules\CvMaker\Controller\CvMakerController@indexAction',
    ]),
    'article' => new Route('/article/', [
        'controller' => '\Modules\Articles\Controller\MainController@indexAction',
    ]),
    'cv' => new Route('/cv/', [
        'controller' => '\Modules\CvMaker\Controller\CvMakerController@indexAction',
    ])
];
