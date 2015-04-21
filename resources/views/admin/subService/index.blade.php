@extends('......app')

@section('content')
<section>
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
                            text
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
                             <div class="body ">{{$subservice->text}}</div>
                         </td>
                           <td>
                               @foreach($subservice->services as $service)
                                    <a href="service/{{$service->id}}/edit"><div class="service">{{$service['title']}}</div></a>
                               @endforeach
                           </td>
                           <td>
                               <img width="70px" src="{{$subservice->img}}">
                           </td>
                     </tr>
                  </tbody>
            @endforeach
            </table>
        </div>
    </div>
</section>

@stop