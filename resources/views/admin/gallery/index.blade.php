@extends('......app')

@section('content')
<section>
     <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
        <a href="gallery/create" ><div class="btn btn-primary">Lägg till bild</div></a>
          <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Titel
                                </th>
                                 <th>
                                    Bild
                                </th>
                                <th>
                                    skapad
                                </th>

                            </tr>
                         </thead>
                    @foreach($images as $image)
                         <tbody>
                               <tr>
                                 <td>
                                     <h4>
                                         <a href="/admin/gallery/{{ $image->id }}/edit">{{$image->title}}</a>
                                     </h4>
                                 </td>
                                 <td>
                                      <h4>
                                         <img src="{{$image->image}}" height="50" width="70">
                                      </h4>
                                  </td>
                                 <td>
                                     <p>{{$image->created_at}}</p>
                                 </td>
                                 <td>
                                    {!! Form::open(array('url' => 'admin/gallery/' . $image->id, 'class' => 'pull-right')) !!}
                                        {!! Form::hidden('_method', 'DELETE')!!}
                                        {!! Form::submit('Ta bort bild', array('class' => 'btn btn-warning')) !!}
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