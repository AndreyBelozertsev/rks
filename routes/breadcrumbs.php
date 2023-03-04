<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

Breadcrumbs::for('service-category.index', function ($trail) {
    $trail->push('Услуги', route('service-category.index'));
});

Breadcrumbs::for('service-category.show', function ($trail, $category) {
    $trail->parent('service-category.index');
    $trail->push($category->title, route('service-category.show',['slug'=> $category->slug]));
});

Breadcrumbs::for('service-category.development', function ($trail) {
    $trail->parent('service-category.index');
    $trail->push('Разработка', route('service-category.show',['slug'=> 'razrabotka']));
});

Breadcrumbs::for('development-stage.show', function ($trail, $stage) {
    $trail->parent('service-category.development');
    $trail->push($stage->title, route('development-stage.show',['slug'=> $stage->slug]));
});

Breadcrumbs::for('service.show', function ($trail, $service) {
    $trail->parent('service-category.show',$service->category);
    $trail->push($service->title, route('service.show',['category'=>$service->category->slug ,'slug'=> $service->slug]));
});

Breadcrumbs::for('case.index', function ($trail) {
    $trail->push('Кейсы');
});

Breadcrumbs::for('case.show', function ($trail, $portfolio) {
    $trail->parent('case.index',$portfolio);
    $trail->push($portfolio->title, route('case.show',['slug'=> $portfolio->slug]));
});

Breadcrumbs::for('article.index', function ($trail) {
    $trail->push('Блог');
});

Breadcrumbs::for('article.show', function ($trail, $post) {
    $trail->parent('article.index',$post);
    $trail->push($post->title, route('article.show',['slug'=> $post->slug]));
});