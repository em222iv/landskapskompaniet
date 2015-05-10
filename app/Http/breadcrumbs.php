<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Förstasidan', route('home'));
});
Breadcrumbs::register('contact', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Kontakt', route('contact'));
});
Breadcrumbs::register('about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Landskapskompaniet', route('about'));
});
//gallery pages
Breadcrumbs::register('gallery', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Galleri', route('gallery'));
});
Breadcrumbs::register('gallery/{id}', function ($breadcrumbs) {
    $breadcrumbs->parent('gallery');
    $breadcrumbs->push('Bild', route('gallery/{id}'));
});

//services pages
Breadcrumbs::register('services', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tjänster', route('services'));
});
Breadcrumbs::register('services/{id}', function ($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Tjänst', route('services/{id}'));
});

//admin
Breadcrumbs::register('admin/home', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Admin', route('admin/home'));
});
//resource routes
//admin carousel
Breadcrumbs::register('admin/home', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Admin: ' . Auth::User()->name, route('admin/home'));
});
Breadcrumbs::register('admin.carousels.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin/home');
    $breadcrumbs->push('Sliders', route('admin.carousels.index'));
});
Breadcrumbs::register('admin.carousels.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.carousels.index');
    $breadcrumbs->push('Skapa Slider', route('admin.carousels.create'));
});
Breadcrumbs::register('admin.carousels.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.carousels.index');
    $breadcrumbs->push('Ändra Slider', route('admin.carousels.edit'));
});
Breadcrumbs::register('admin.image.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin/home');
    $breadcrumbs->push('Bilder', route('admin.image.index'));
});
Breadcrumbs::register('admin.image.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.image.index');
    $breadcrumbs->push('Lägg till bild', route('admin.image.create'));
});

//admin gallery
Breadcrumbs::register('admin.gallery.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin/home');
    $breadcrumbs->push('Galleriet', route('admin.gallery.index'));
});
Breadcrumbs::register('admin.gallery.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.gallery.index');
    $breadcrumbs->push('Lägg till bild', route('admin.gallery.create'));
});
Breadcrumbs::register('admin.gallery.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.gallery.index');
    $breadcrumbs->push('Ändra bild', route('admin.gallery.edit'));
});
//admin service
Breadcrumbs::register('admin.service.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin/home');
    $breadcrumbs->push('Tjänster', route('admin.service.index'));
});
Breadcrumbs::register('admin.service.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.service.index');
    $breadcrumbs->push('Lägg till tjänst', route('admin.service.create'));
});
Breadcrumbs::register('admin.service.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.service.index');
    $breadcrumbs->push('Ändra tjänst', route('admin.service.edit'));
});
//admin service
Breadcrumbs::register('admin.subservice.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin/home');
    $breadcrumbs->push('Deltjänster', route('admin.subservice.index'));
});
Breadcrumbs::register('admin.subservice.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.subservice.index');
    $breadcrumbs->push('Lägg till deltjänst', route('admin.subservice.create'));
});
Breadcrumbs::register('admin.subservice.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.subservice.index');
    $breadcrumbs->push('Ändra deltjänst', route('admin.subservice.edit'));
});