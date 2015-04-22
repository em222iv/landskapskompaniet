@extends('......app')

@section('content')
<section id="service-section">
   <div id="service-row" class="row">

        <div class="col-md-8 col-md-offset-2 text-center">

        <a href="service/create" ><div class="btn btn-primary">Skapa Tjänst</div></a>
        <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Tjänst
                        </th>
                         <th>
                             Deltjänster
                        </th>

                    </tr>
                 </thead>
            @foreach($services as $service)
                 <tbody>
                       <tr>
                         <td>
                         <div class="contain-text">
                             <h4>
                                 <a href="/admin/subservice/{{ $service->id }}/edit">{{$service['title']}}</a>
                             </h4>
                             </div>
                         </td>

                            <td>
                              @foreach($service->sub_services as $subservice)
                                   <a href="subservice/{{$subservice->id}}/edit">{{$subservice['head-title']}}</a> |
                              @endforeach
                          </td>
                           <td>
                             {!! Form::open(array('url' => 'admin/subservice/' . $service->id, 'class' => 'pull-right')) !!}
                               {!! Form::hidden('_method', 'DELETE')!!}
                               {!! Form::submit('', array('class' => 'btn btn-danger btn-fab btn-xs mdi-navigation-close')) !!}
                             {!! Form::close() !!}
                        </td>
                     </tr>
                  </tbody>
            @endforeach
            </table>
            </div>
            </div>
        </div>

</section>
@endsection