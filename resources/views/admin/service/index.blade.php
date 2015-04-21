@extends('......app')

@section('content')
<section>
     <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
        <a href="service/create" ><div class="btn btn-primary">Skapa Tjänst</div></a>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Titel
                        </th>
                        <th>
                            text
                        </th>
                        <th>
                            skapad
                        </th>

                    </tr>
                 </thead>
            @foreach($services as $service)

                 <tbody>
                       <tr>
                         <td>
                             <h4>
                                 <a href="/admin/service/{{ $service->id }}/edit">{{$service->title}}</a>
                             </h4>
                         </td>
                         <td>
                             <div class="body ">{{$service->text}}</div>
                         </td>
                           <td>
                               <div class="body ">{{$service->sub_services}}</div>
                           </td>
                         <td>
                             <img src="{{$service->img}}" height="50" width="70">
                         </td>
                         <td>
                            {!! Form::open(array('url' => 'admin/service/' . $service->id, 'class' => 'pull-right')) !!}
                                {!! Form::hidden('_method', 'DELETE')!!}
                                {!! Form::submit('Ta bort Tjänst', array('class' => 'btn btn-warning')) !!}
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