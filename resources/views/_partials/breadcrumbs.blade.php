@if (Breadcrumbs::exists())
     {!! Breadcrumbs::render() !!}
  @elseif(Breadcrumbs::exists() == false)
     {!! Breadcrumbs::render('home') !!}
  @else
     {!! Breadcrumbs::render(Request::path()) !!}
@endif