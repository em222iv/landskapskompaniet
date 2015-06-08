@extends('......app')

@section('content')
<section>
     <div id="table-row" class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
        <a href="{{route('admin.slider.create')}}" ><div class="btn btn-primary">Skapa Slider</div></a>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Titel
                        </th>
                         <th>
                            Titel
                        </th>
                    </tr>
                 </thead>
            @foreach($carousels as $carousel)
                 <tbody>
                       <tr>
                         <td>
                             <h4>
                                 <a href="/admin/slider/{{ $carousel->id }}/edit">{{$carousel->title}}</a>
                             </h4>
                         </td>
                         <td>

                         </td>
                         <td>
                            {!! Form::open(array('url' => 'admin/slider/' . $carousel->id, 'class' => 'pull-right')) !!}
                                {!! Form::hidden('_method', 'DELETE')!!}
                                {!! Form::submit('Ta bort Slider', array('class' => 'btn btn-warning')) !!}
                            {!! Form::close() !!}
                         </td>
                     </tr>
                  </tbody>
            @endforeach
            </table>
        </div>
    </div>
</section>

@stop