
   <div class="form-group">
    {!! Form::label('image', 'Bild') !!}
    {!! Form::file('image',['class'=>'form-control']) !!}
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