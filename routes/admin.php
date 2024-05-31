<?php

use Assignment\Php2News\Controllers\Admin\DashboardController;
use Assignment\Php2News\Controllers\Admin\CategoriesController;
use Assignment\Php2News\Controllers\Admin\CommentsController;
use Assignment\Php2News\Controllers\Admin\PostsController;
use Assignment\Php2News\Controllers\Admin\ProfileController;
use Assignment\Php2News\Controllers\Admin\SettingsController;
use Assignment\Php2News\Controllers\Admin\TagsController;
use Assignment\Php2News\Controllers\Admin\UsersController;


$router->mount('/admin', function () use ($router) {

    // DASHBOARD
    $router->get(  '/'          , DashboardController::class . '@dashboard');

    // SETTINGS
    $router->mount('/settings'  , function () use ($router) {

        // Settings index
        $router->get(                   '/'                 ,       SettingsController::class       .   '@index');

        // Settings Edit
        $router->get(                   '/edit'             ,       SettingsController::class       .   '@edit');
        
    });

    // PROFILE
    $router->mount('/profile'   , function () use ($router) {

        // Profile index
        $router->get(                   '/'                 ,       ProfileController::class        .   '@index');

        // Profile Edit
        $router->get(                   '/edit'             ,       ProfileController::class        .   '@edit');
        
    });

    // CATEGORIES
    $router->mount('/categories', function () use ($router) {

        // Categories List
        $router->match  ('GET|POST',    '/'                 ,       CategoriesController::class     .   '@list');

        // Categories Edit
        $router->match  ('GET|POST',    '/edit'             ,       CategoriesController::class     .   '@edit');

        // Categories Hide
        $router->get    (               '/hide'             ,       CategoriesController::class     .   '@hide');

        // Categories Show
        $router->get    (               '/show'             ,       CategoriesController::class     .   '@show');

        // Categories Delete
        $router->get    (               '/delete'           ,       CategoriesController::class     .   '@delete');

        // Categories List Hide
        $router->get    (               '/list-hide'        ,       CategoriesController::class     .   '@listHide');

    });

    // TAGS
    $router->mount('/tags'      , function () use ($router) {

        // Tags List
        $router->match  ('GET|POST',    '/'                 ,       TagsController::class           .   '@list');

        // Tags Edit
        $router->match  ('GET|POST',    '/edit'             ,       TagsController::class           .   '@edit');

        // Tags Hide
        $router->get    (               '/hide'             ,       TagsController::class           .   '@hide');

        // Tags Show
        $router->get    (               '/show'             ,       TagsController::class           .   '@show');

        // Tags Delete
        $router->get    (               '/delete'           ,       TagsController::class           .   '@delete');

        // Tags List Hide
        $router->get    (               '/list-hide'        ,       TagsController::class           .   '@listHide');
   
    });

    // POSTS
    $router->mount('/posts'     , function () use ($router) {

        // Posts List
        $router->match  ('GET|POST',    '/'                 ,       PostsController::class          .   '@list');

        // Posts Add
        $router->match  ('GET|POST',    '/add'              ,       PostsController::class          .   '@add');
        
        // Posts Detail
        $router->match  ('GET|POST',    '/detail'           ,       PostsController::class          .   '@detail');

        // Posts Edit
        $router->match  ('GET|POST',    '/edit'             ,       PostsController::class          .   '@edit');

        // Posts Hide
        $router->get    (               '/hide'             ,       PostsController::class          .   '@hide');

        // Posts Show
        $router->get    (               '/show'             ,       PostsController::class          .   '@show');

        // Posts Delete
        $router->get    (               '/delete'           ,       PostsController::class          .   '@delete');

        // Posts List Hide
        $router->get    (               '/list-hide'        ,       PostsController::class          .   '@listHide');
   
    });

    // USERS
    $router->mount('/users'     , function () use ($router) {

        // Users List

        $router->match  ('GET|POST',    '/'                         ,       UsersController::class          .   '@list');

        // Users Restore Password
        $router->get    (               '/restore-password/{id}'    ,       UsersController::class          .   '@restorePassword');

        // Users Edit
        $router->match  ('GET|POST',    '/edit/{id}'                ,       UsersController::class          .   '@edit');

        // Users lock
        $router->get    (               '/lock/{id}'                ,       UsersController::class          .   '@lock');

        // Users Unlock
        $router->get    (               '/unlock/{id}'              ,       UsersController::class          .   '@unlock');

        // Users List lock
        $router->get    (               '/list-lock'                ,       UsersController::class          .   '@listLock');
   
    });

    // COMMENTS
    $router->mount('/comments'  , function () use ($router) {
        
        // Comments List
        $router->match  ('GET|POST',    '/'                 ,       CommentsController::class       .   '@list');

        // Comments Detail Comment
        $router->get    (               '/detail-comment'   ,       CommentsController::class       .   '@detailComment');

        // Comments Delete Comment
        $router->get    (               '/delete-comment'   ,       CommentsController::class       .   '@deleteComment');

        // Comments Delete Reply
        $router->get    (               '/delete-reply'     ,       CommentsController::class       .   '@deleteReply');
   
    });

});
