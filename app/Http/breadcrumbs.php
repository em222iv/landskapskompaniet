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
Breadcrumbs::register('image', function($breadcrumbs, $image){
    $breadcrumbs->parent('gallery');
    $breadcrumbs->push($image->title, route('image'));
});
//services pages
Breadcrumbs::register('services', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tjänster', route('services'));
});
Breadcrumbs::register('service', function ($breadcrumbs,$service) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push($service->title, route('service'));
});

//admin
Breadcrumbs::register('admin.home', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Admin', route('admin.home'));
});
//resource routes
//admin carousel
Breadcrumbs::register('admin.home', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push("Admin: ".Auth::User()->name, route('admin.home'));
});
Breadcrumbs::register('admin.carousels.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Sliders', route('admin.carousels.index'));
});
Breadcrumbs::register('admin.carousels.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.carousels.index');
    $breadcrumbs->push('Skapa Slider', route('admin.carousels.create'));
});
Breadcrumbs::register('admin.carousels.edit', function ($breadcrumbs, $carousel) {
    $breadcrumbs->parent('admin.carousels.index');
    $breadcrumbs->push($carousel->title, route('admin.carousels.edit'));
});
//admin gallery
Breadcrumbs::register('admin.gallery.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Galleriet', route('admin.gallery.index'));
});
Breadcrumbs::register('admin.gallery.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.gallery.index');
    $breadcrumbs->push('Lägg till bild', route('admin.gallery.create'));
});
Breadcrumbs::register('admin.gallery.edit', function ($breadcrumbs, $image) {
    $breadcrumbs->parent('admin.gallery.index');
    $breadcrumbs->push($image->title, route('admin.gallery.edit'));
});
//admin service
Breadcrumbs::register('admin.service.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Tjänster', route('admin.service.index'));
});
Breadcrumbs::register('admin.service.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.service.index');
    $breadcrumbs->push('Skapa Tjänst', route('admin.service.create'));
});
Breadcrumbs::register('admin.service.edit', function ($breadcrumbs,$service) {
    $breadcrumbs->parent('admin.service.index');
    $breadcrumbs->push($service->title, route('admin.service.edit'));
});
//admin subservice
Breadcrumbs::register('admin.subservice.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Deltjänster', route('admin.subservice.index'));
});
Breadcrumbs::register('admin.subservice.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.subservice.index');
    $breadcrumbs->push('Lägg till deltjänst', route('admin.subservice.create'));
});
Breadcrumbs::register('admin.subservice.edit', function ($breadcrumbs,$subservice) {
    $breadcrumbs->parent('admin.subservice.index');
    $breadcrumbs->push($subservice['head-title'], route('admin.subservice.edit'));
});
//admin email
Breadcrumbs::register('admin.subservice.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Deltjänster', route('admin.subservice.index'));
});
Breadcrumbs::register('admin.email.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Mail', route('admin.email.create'));
});


