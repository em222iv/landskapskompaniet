<div class="form-group">
    {!! Form::label('img', 'Bild') !!}
    {!! Form::file('img',['class'=>'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::label('title','Titel:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::label('text','Text:') !!}
    {!! Form::textarea('text',null,['class'=>'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
   </div>
 <h3>Deltjänster</h3>
 <div class="form-group">
        @foreach($service->sub_services as $ss)
            {!! Form::checkbox($ss['head-title'], $ss->id, true, ['class' => 'checkbox']) !!}
            <div class="panel panel-default" style="background-image: url('{{$ss->img}}');background-repeat:no-repeat">
                   <a href="/admin/subservice/{{ $ss->id }}/edit"><div id="gallery-panel-body" class="panel-body">
                      <h4>{{$ss['head-title']}}</h4>
                       <div class="gallery-item-body contain-text">
                         <p>{{$ss->text}}</p>
                       </div>
                   </div>
                   </a>
             </div>
        @endforeach
        <h3>Ytterliggare deltjänster</h3>
        @foreach($subservices as $rss)
            {!! Form::checkbox($rss['head-title'], $rss->id, null, ['class' => 'checkbox','id'=>'checkie']) !!}
            <div class="panel panel-default" style="background-image: url('{{$rss->img}}');background-repeat:no-repeat">
                   <a href="/admin/subservice/{{ $rss->id }}/edit"><div id="gallery-panel-body" class="panel-body">
                      <h4>{{$rss['head-title']}}</h4>
                       <div class="gallery-item-body contain-text">
                         <p>{{$rss->text}}</p>
                       </div>
                   </div>
                   </a>
             </div>
        @endforeach
    </div>
 <div class="form-group">
     {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
    </div>