@if (Breadcrumbs::exists())
       {!! Breadcrumbs::render(Route::currentRouteName()) !!}
    @elseif(Breadcrumbs::exists() == false)
       {!! Breadcrumbs::render('home') !!}
    @else
       {!! Breadcrumbs::render(Request::path()) !!}
@endif