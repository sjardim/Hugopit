<?php

//include cockpit
include_once('cockpit/bootstrap.php');

$app = new Lime\App();

// bind routes

$app->bind("/", function() use($app) {
    return $app->render('views/index.php');
});

$app->bind("/posts", function() use($app) {

    // $posts = collection('Posts')->find(["public"=>true])->sort(["created"=>1])->toArray();

    //get posts with related categories
    $posts = cockpit('collections')->populate('Posts', cockpit('collections')->find('Posts'))->toArray();

    return $app->render('views/posts.php', ['posts' => $posts]);
});

$app->bind("/pages", function() use($app) {

    $posts = collection('Pages')->find(["public"=>true])->sort(["created"=>1])->toArray();

    return $app->render('views/pages.php', ['pages' => $posts]);
});

$app->bind("/projects", function() use($app) {

    //get projects with related categories
    $posts = cockpit('collections')->populate('Projects', cockpit('collections')->find('Projects'))->toArray();

    return $app->render('views/projects.php', ['projects' => $posts]);
});


// $app->bind("/article/:title_slug", function($params) use($app) {

//     $post = collection('blog')->findOne(["title_slug"=>$params['title_slug']]);

//     return $app->render('views/article.php', ['post' => $post]);
// });

$app->run();