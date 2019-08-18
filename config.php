<?php

return [
    'production' => false,
    'baseUrl' => 'https://www.wangyong.com/',
    'site' => [
        'title' => 'My Blog',
        'description' => 'Personal blog of Yong Wang.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Yong Wang',
        'facebook' => 'uscwy',
        'linkedin' => 'wang-yong-usc',
        'twitter' => 'coolnet6',
        'github' => 'uscwy',
    ],
    'services' => [
        'analytics' => 'UA-145860007-1',
        'disqus' => 'wangyong',
        'cloudinary' => 'wangyong',
        'jumprock' => 'wangyong',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
