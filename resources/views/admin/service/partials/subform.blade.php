 <h3>Deltjänster</h3>



  @foreach($service->sub_services as $ss)
    {!! Form::checkbox($ss['head-title'], $ss->id, null, ['class' => 'checkbox']) !!}
    <div class="panel panel-default" style="background-image: url('{{$ss->img}}');background-repeat:no-repeat">
                   <a href="/admin/gallery/{{ $ss->id }}/edit"><div id="gallery-panel-body" class="panel-body">
                      <h4>{{$ss['head-title']}}</h4>
                       <div class="gallery-item-body contain-text">
                         <p>m{{$ss->text}}</p>
                       </div>
                   </div>
                   </a>
             </div>
{{--

     <div id="check-awesome " class="form-group">
        <input type="checkbox" id="check-me">

        <label for="check-me">
          <span></span>
          <span class="check"></span>
          <span class="box"></span>
        </label>
         <div class="panel panel-default" style="background-image: url('{{$ss->img}}');background-repeat:no-repeat">
               <a href="/admin/gallery/{{ $ss->id }}/edit"><div id="gallery-panel-body" class="panel-body">
                  <h4>{{$ss['head-title']}}</h4>
                   <div class="gallery-item-body contain-text">
                     <p>m{{$ss->text}}</p>
                   </div>
               </div>
               </a>
         </div>
     </div>
--}}


    @endforeach
 {!! Form::submit('doeet',['class'=>'btn btn-primary']) !!}