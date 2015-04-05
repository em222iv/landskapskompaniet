<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Hem', route('home'));
});
Breadcrumbs::register('contact', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Kontakt', route('contact'));
});
Breadcrumbs::register('about', function($breadcrumbs) {
    $breadcrumbs->parent('home');
$breadcrumbs->push('Landskapskompaniet', route('about'));
});
//gallery pages
Breadcrumbs::register('gallery', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Galleri', route('gallery'));
});
Breadcrumbs::register('gallery/image', function($breadcrumbs) {
    $breadcrumbs->parent('gallery');
    $breadcrumbs->push('Bild', route('gallery/image'));
});

//serives pages
Breadcrumbs::register('services', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tjänster', route('services'));
});
Breadcrumbs::register('services/trees', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Träd', route('services/trees'));
});
Breadcrumbs::register('services/plowing', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Plogning', route('services/plowing'));
});

Breadcrumbs::register('admin/home', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Admin', route('admin/home'));
});
//resource routes
Breadcrumbs::register('admin/home', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Admin', route('admin/home'));
});
Breadcrumbs::register('admin.carousels.index', function($breadcrumbs) {
    $breadcrumbs->parent('admin/home');
    $breadcrumbs->push('Sliders', route('admin.carousels.index'));
});
Breadcrumbs::register('admin.carousels.create', function($breadcrumbs) {
    $breadcrumbs->parent('admin.carousels.index');
    $breadcrumbs->push('Skapa Slider', route('admin.carousels.create'));
});
Breadcrumbs::register('admin.carousels.edit', function($breadcrumbs) {
    $breadcrumbs->parent('admin.carousels.index');
    $breadcrumbs->push('Skapa Carousel', route('admin.carousels.edit'));
});
Breadcrumbs::register('admin.image.index', function($breadcrumbs) {
    $breadcrumbs->parent('admin/home');
    $breadcrumbs->push('Bilder', route('admin.image.index'));
});
Breadcrumbs::register('admin.image.create', function($breadcrumbs) {
    $breadcrumbs->parent('admin.image.index');
    $breadcrumbs->push('Lägg till bild', route('admin.image.create'));
});
