@extends('......app')

@section('content')
<section id="subservices">
     <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
        <a href="subservice/create" ><div class="btn btn-primary">Skapa deltjänst</div></a>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Titel
                        </th>
                          <th>
                            Tillhör Tjänster
                        </th>




                    </tr>
                 </thead>
            @foreach($subservices as $subservice)
                 <tbody>
                       <tr>
                         <td>
                             <h4>
                                 <a href="/admin/subservice/{{ $subservice->id }}/edit">{{$subservice['head-title']}} {{$subservice['sub-title']}}</a>
                             </h4>
                         </td>
                           <td>
                               @foreach($subservice->services as $service)
                                   <a href="service/{{$service->id}}/edit">{{$service['title']}}</a> |
                               @endforeach
                           </td>

                           <td>
                             {!! Form::open(array('url' => 'admin/subservice/' . $subservice->id, 'class' => 'pull-right')) !!}
                               {!! Form::hidden('_method', 'DELETE')!!}
                               {!! Form::submit('Ta bort', array('class' => 'btn btn-warning')) !!}
                             {!! Form::close() !!}
                            </td>
                     </tr>
                  </tbody>
            @endforeach
            </table>
        </div>
    </div>
</section>
<script>
    var tableclass = document.getElementsByClassName('big-table');
    if ($(window).width() < 960) {
       document.removeChild(tableclass);
    }
    else {
         tableclass.visibility = 'hidden'
    }
</script>
@stop